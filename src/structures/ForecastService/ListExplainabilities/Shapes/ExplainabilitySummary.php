<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListExplainabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ExplainabilityArn
 * @property string $ExplainabilityName
 * @property string $ResourceArn
 * @property ExplainabilityConfig $ExplainabilityConfig
 * @property string $Status
 * @property string $Message
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModificationTime
 */
class ExplainabilitySummary extends Shape
{
    /**
     * @param array{
     *     ExplainabilityArn?: string,
     *     ExplainabilityName?: string,
     *     ResourceArn?: string,
     *     ExplainabilityConfig?: ExplainabilityConfig,
     *     Status?: string,
     *     Message?: string,
     *     CreationTime?: \Aws\Api\DateTimeResult,
     *     LastModificationTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
