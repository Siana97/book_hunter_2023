<?php

namespace App\Models\TagsModel;

function findAll(\PDO $connexion)
{
    $sql = "SELECT *
            FROM tags
            ORDER BY name ASC;";

    $rs = $connexion->query($sql);
    return $rs->fetchAll(\PDO::FETCH_ASSOC);
}

function findOneById(\PDO $connexion, int $id)
{
    $sql = "SELECT *
            FROM tags c
            WHERE c.id = :id 
            ;";
    $rs = $connexion->prepare($sql);
    $rs->bindValue(":id", $id, \PDO::PARAM_INT);
    $rs->execute();
    return $rs->fetch(\PDO::FETCH_ASSOC);
}
