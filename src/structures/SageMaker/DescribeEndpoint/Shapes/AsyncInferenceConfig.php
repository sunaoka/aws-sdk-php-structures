<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeEndpoint\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AsyncInferenceClientConfig $ClientConfig
 * @property AsyncInferenceOutputConfig $OutputConfig
 */
class AsyncInferenceConfig extends Shape
{
    /**
     * @param array{
     *     ClientConfig?: AsyncInferenceClientConfig,
     *     OutputConfig: AsyncInferenceOutputConfig
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
