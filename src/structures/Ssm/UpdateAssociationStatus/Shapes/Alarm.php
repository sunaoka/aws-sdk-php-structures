<?php

namespace Sunaoka\Aws\Structures\Ssm\UpdateAssociationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 */
class Alarm extends Shape
{
    /**
     * @param array{Name: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
