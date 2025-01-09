<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetNodes
 * @property ContainerProperties $container
 * @property list<string> $instanceTypes
 * @property EcsProperties $ecsProperties
 * @property EksProperties $eksProperties
 */
class NodeRangeProperty extends Shape
{
    /**
     * @param array{
     *     targetNodes: string,
     *     container?: ContainerProperties,
     *     instanceTypes?: list<string>,
     *     ecsProperties?: EcsProperties,
     *     eksProperties?: EksProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
