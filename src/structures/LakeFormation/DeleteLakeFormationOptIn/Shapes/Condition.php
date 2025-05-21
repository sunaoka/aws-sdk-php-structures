<?php

namespace Sunaoka\Aws\Structures\LakeFormation\DeleteLakeFormationOptIn\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Expression
 */
class Condition extends Shape
{
    /**
     * @param array{Expression?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
