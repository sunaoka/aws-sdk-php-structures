<?php

namespace Sunaoka\Aws\Structures\Kafka\DescribeClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VpcConfig> $VpcConfigs
 * @property ServerlessClientAuthentication $ClientAuthentication
 */
class Serverless extends Shape
{
    /**
     * @param array{
     *     VpcConfigs: list<VpcConfig>,
     *     ClientAuthentication?: ServerlessClientAuthentication
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
