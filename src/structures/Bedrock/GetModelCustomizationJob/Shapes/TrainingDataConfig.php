<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetModelCustomizationJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $s3Uri
 * @property InvocationLogsConfig|null $invocationLogsConfig
 */
class TrainingDataConfig extends Shape
{
    /**
     * @param array{
     *     s3Uri?: string|null,
     *     invocationLogsConfig?: InvocationLogsConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
