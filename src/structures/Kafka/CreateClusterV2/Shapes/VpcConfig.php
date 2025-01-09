<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $SubnetIds
 * @property list<string> $SecurityGroupIds
 */
class VpcConfig extends Shape
{
    /**
     * @param array{
     *     SubnetIds: list<string>,
     *     SecurityGroupIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
