<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostSupportedInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceType
 * @property int $VCPUs
 */
class InstanceTypeItem extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string,
     *     VCPUs?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
