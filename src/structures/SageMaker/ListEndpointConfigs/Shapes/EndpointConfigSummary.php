<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEndpointConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EndpointConfigName
 * @property string $EndpointConfigArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class EndpointConfigSummary extends Shape
{
    /**
     * @param array{
     *     EndpointConfigName: string,
     *     EndpointConfigArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
