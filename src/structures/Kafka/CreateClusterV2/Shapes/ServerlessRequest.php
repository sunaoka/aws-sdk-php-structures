<?php

namespace Sunaoka\Aws\Structures\Kafka\CreateClusterV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VpcConfig> $VpcConfigs
 * @property ServerlessClientAuthentication|null $ClientAuthentication
 */
class ServerlessRequest extends Shape
{
    /**
     * @param array{
     *     VpcConfigs: list<VpcConfig>,
     *     ClientAuthentication?: ServerlessClientAuthentication|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
