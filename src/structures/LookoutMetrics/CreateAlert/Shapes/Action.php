<?php

namespace Sunaoka\Aws\Structures\LookoutMetrics\CreateAlert\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SNSConfiguration $SNSConfiguration
 * @property LambdaConfiguration $LambdaConfiguration
 */
class Action extends Shape
{
    /**
     * @param array{
     *     SNSConfiguration?: SNSConfiguration,
     *     LambdaConfiguration?: LambdaConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
