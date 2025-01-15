<?php

namespace Sunaoka\Aws\Structures\ForecastService\ListExplainabilities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ExplainabilityArn
 * @property string|null $ExplainabilityName
 * @property string|null $ResourceArn
 * @property ExplainabilityConfig|null $ExplainabilityConfig
 * @property string|null $Status
 * @property string|null $Message
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModificationTime
 */
class ExplainabilitySummary extends Shape
{
    /**
     * @param array{
     *     ExplainabilityArn?: string|null,
     *     ExplainabilityName?: string|null,
     *     ResourceArn?: string|null,
     *     ExplainabilityConfig?: ExplainabilityConfig|null,
     *     Status?: string|null,
     *     Message?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModificationTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
