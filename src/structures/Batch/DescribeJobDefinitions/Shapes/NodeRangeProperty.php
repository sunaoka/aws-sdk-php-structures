<?php

namespace Sunaoka\Aws\Structures\Batch\DescribeJobDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $targetNodes
 * @property ContainerProperties|null $container
 * @property list<string>|null $instanceTypes
 * @property EcsProperties|null $ecsProperties
 * @property EksProperties|null $eksProperties
 */
class NodeRangeProperty extends Shape
{
    /**
     * @param array{
     *     targetNodes: string,
     *     container?: ContainerProperties|null,
     *     instanceTypes?: list<string>|null,
     *     ecsProperties?: EcsProperties|null,
     *     eksProperties?: EksProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
