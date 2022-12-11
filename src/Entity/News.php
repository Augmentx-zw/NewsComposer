<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NewsRepository::class)
 */
class News
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
    private $Title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Image;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $DateAdded;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $CommentCount;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->Image;
    }

    public function setImage(?string $Image): self
    {
        $this->Image = $Image;

        return $this;
    }

    public function getDateAdded(): ?string
    {
        return $this->DateAdded;
    }

    public function setDateAdded(?string $DateAdded): self
    {
        $this->DateAdded = $DateAdded;

        return $this;
    }

    public function getCommentCount(): ?string
    {
        return $this->CommentCount;
    }

    public function setCommentCount(string $CommentCount): self
    {
        $this->CommentCount = $CommentCount;

        return $this;
    }
}
