<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetEffectivePermissionsForPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $ResourceShare
 */
class DetailsMap extends Shape
{
    /**
     * @param array{ResourceShare?: list<string>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
