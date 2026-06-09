<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOrderableInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceType
 * @property int|null $VCPUs
 * @property int|null $MemoryInMib
 * @property string|null $NetworkPerformance
 * @property list<FormFactorConfig>|null $FormFactorConfigs
 */
class DetailedInstanceTypeItem extends Shape
{
    /**
     * @param array{
     *     InstanceType?: string|null,
     *     VCPUs?: int|null,
     *     MemoryInMib?: int|null,
     *     NetworkPerformance?: string|null,
     *     FormFactorConfigs?: list<FormFactorConfig>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
