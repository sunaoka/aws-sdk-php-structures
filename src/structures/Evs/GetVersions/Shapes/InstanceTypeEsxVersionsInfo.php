<?php

namespace Sunaoka\Aws\Structures\Evs\GetVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'i4i.metal'|'i7i.metal-24xl' $instanceType
 * @property list<string> $esxVersions
 */
class InstanceTypeEsxVersionsInfo extends Shape
{
    /**
     * @param array{
     *     instanceType: 'i4i.metal'|'i7i.metal-24xl',
     *     esxVersions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
