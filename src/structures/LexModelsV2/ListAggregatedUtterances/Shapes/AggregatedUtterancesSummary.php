<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListAggregatedUtterances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $utterance
 * @property int|null $hitCount
 * @property int|null $missedCount
 * @property \Aws\Api\DateTimeResult|null $utteranceFirstRecordedInAggregationDuration
 * @property \Aws\Api\DateTimeResult|null $utteranceLastRecordedInAggregationDuration
 * @property bool|null $containsDataFromDeletedResources
 */
class AggregatedUtterancesSummary extends Shape
{
    /**
     * @param array{
     *     utterance?: string|null,
     *     hitCount?: int|null,
     *     missedCount?: int|null,
     *     utteranceFirstRecordedInAggregationDuration?: \Aws\Api\DateTimeResult|null,
     *     utteranceLastRecordedInAggregationDuration?: \Aws\Api\DateTimeResult|null,
     *     containsDataFromDeletedResources?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
