<?php

namespace App\model;

interface TimestampedInterface
{
    public function getDateCreated(): ?\DateTimeInterface;


    public function setDateCreated(\DateTimeInterface $date_created);


    public function getDateUpdated(): ?\DateTimeInterface;


    public function setDateUpdated(?\DateTimeInterface $date_updated);
}
