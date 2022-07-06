<?php

namespace App;

class PieceOfWork
{
  /** @var type $ description. */
  public string $title;

  protected Mate $forWhom = null;
  protected Priority $priority = null;
}
