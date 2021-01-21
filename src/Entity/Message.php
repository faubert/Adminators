<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\MessageRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MessageRepository::class)
 * @ApiResource()
 */
class Message
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $messageFrom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $messageTo;

    /**
     * @ORM\Column(type="text")
     */
    private $content;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMessageFrom(): ?string
    {
        return $this->messageFrom;
    }

    public function setMessageFrom(string $messageFrom): self
    {
        $this->messageFrom = $messageFrom;

        return $this;
    }

    public function getMessageTo(): ?string
    {
        return $this->messageTo;
    }

    public function setMessageTo(string $messageTo): self
    {
        $this->messageTo = $messageTo;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}
