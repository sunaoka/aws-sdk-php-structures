<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\UpdateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property 'NEGATIVE' $SentimentType
 * @property int<60, 1800> $TimePeriod
 */
class SentimentConfiguration extends Shape
{
    /**
     * @param array{
     *     RuleName: string,
     *     SentimentType: 'NEGATIVE',
     *     TimePeriod: int<60, 1800>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
