<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\CreateConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bootstrapServers
 * @property Vpc $vpc
 */
class ApacheKafkaCluster extends Shape
{
    /**
     * @param array{
     *     bootstrapServers: string,
     *     vpc: Vpc
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
