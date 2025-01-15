<?php

namespace Sunaoka\Aws\Structures\LakeFormation\GetEffectivePermissionsForPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $ResourceShare
 */
class DetailsMap extends Shape
{
    /**
     * @param array{ResourceShare?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
