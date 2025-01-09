<?php

namespace Sunaoka\Aws\Structures\Bedrock\GetCustomModel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $s3Uri
 * @property InvocationLogsConfig $invocationLogsConfig
 */
class TrainingDataConfig extends Shape
{
    /**
     * @param array{
     *     s3Uri?: string,
     *     invocationLogsConfig?: InvocationLogsConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
