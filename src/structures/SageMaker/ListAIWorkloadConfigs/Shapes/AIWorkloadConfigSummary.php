<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListAIWorkloadConfigs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AIWorkloadConfigName
 * @property string $AIWorkloadConfigArn
 * @property \Aws\Api\DateTimeResult $CreationTime
 */
class AIWorkloadConfigSummary extends Shape
{
    /**
     * @param array{
     *     AIWorkloadConfigName: string,
     *     AIWorkloadConfigArn: string,
     *     CreationTime: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
