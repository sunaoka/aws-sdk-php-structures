<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOutpostSupportedInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceType
 * @property int|null $VCPUs
 */
class InstanceTypeItem extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string|null,
     *     VCPUs?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
