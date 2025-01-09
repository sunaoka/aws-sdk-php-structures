<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $utterance
 * @property int $hitCount
 * @property int $missedCount
 * @property \Aws\Api\DateTimeResult $utteranceFirstRecordedInAggregationDuration
 * @property \Aws\Api\DateTimeResult $utteranceLastRecordedInAggregationDuration
 * @property bool $containsDataFromDeletedResources
 */
class AggregatedUtterancesSummary extends Shape
{
    /**
     * @param array{
     *     utterance?: string,
     *     hitCount?: int,
     *     missedCount?: int,
     *     utteranceFirstRecordedInAggregationDuration?: \Aws\Api\DateTimeResult,
     *     utteranceLastRecordedInAggregationDuration?: \Aws\Api\DateTimeResult,
     *     containsDataFromDeletedResources?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
