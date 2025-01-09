<?php

namespace Sunaoka\Aws\Structures\ChimeSDKMediaPipelines\CreateMediaInsightsPipelineConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RuleName
 * @property 'NEGATIVE' $SentimentType
 * @property int $TimePeriod
 */
class SentimentConfiguration extends Shape
{
    /**
     * @param array{
     *     RuleName: string,
     *     SentimentType: 'NEGATIVE',
     *     TimePeriod: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
