<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpointConfig\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AsyncInferenceClientConfig|null $ClientConfig
 * @property AsyncInferenceOutputConfig $OutputConfig
 */
class AsyncInferenceConfig extends Shape
{
    /**
     * @param array{
     *     ClientConfig?: AsyncInferenceClientConfig|null,
     *     OutputConfig: AsyncInferenceOutputConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
