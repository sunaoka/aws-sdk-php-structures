<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetEffectivePermissionsForPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Expression
 */
class Condition extends Shape
{
    /**
     * @param array{Expression?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
