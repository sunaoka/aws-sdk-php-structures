<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetNodes
 * @property ContainerProperties|null $container
 * @property list<string>|null $instanceTypes
 * @property EcsProperties|null $ecsProperties
 * @property EksProperties|null $eksProperties
 * @property ConsumableResourceProperties|null $consumableResourceProperties
 */
class NodeRangeProperty extends Shape
{
    /**
     * @param array{
     *     targetNodes: string,
     *     container?: ContainerProperties|null,
     *     instanceTypes?: list<string>|null,
     *     ecsProperties?: EcsProperties|null,
     *     eksProperties?: EksProperties|null,
     *     consumableResourceProperties?: ConsumableResourceProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
