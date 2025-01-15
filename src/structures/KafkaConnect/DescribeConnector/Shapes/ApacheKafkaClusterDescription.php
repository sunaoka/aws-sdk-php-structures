<?php

namespace Sunaoka\Aws\Structures\KafkaConnect\DescribeConnector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $bootstrapServers
 * @property VpcDescription|null $vpc
 */
class ApacheKafkaClusterDescription extends Shape
{
    /**
     * @param array{
     *     bootstrapServers?: string|null,
     *     vpc?: VpcDescription|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
