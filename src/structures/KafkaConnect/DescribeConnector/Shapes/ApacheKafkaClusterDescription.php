<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bootstrapServers
 * @property VpcDescription $vpc
 */
class ApacheKafkaClusterDescription extends Shape
{
    /**
     * @param array{
     *     bootstrapServers?: string,
     *     vpc?: VpcDescription
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
