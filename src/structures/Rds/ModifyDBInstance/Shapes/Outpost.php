<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 */
class Outpost extends Shape
{
    /**
     * @param array{Arn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
