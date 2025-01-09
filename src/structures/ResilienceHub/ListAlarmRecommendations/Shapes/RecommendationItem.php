<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAlarmRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $alreadyImplemented
 * @property Alarm $discoveredAlarm
 * @property 'AlreadyImplemented'|'NotRelevant'|'ComplexityOfImplementation' $excludeReason
 * @property bool $excluded
 * @property Experiment $latestDiscoveredExperiment
 * @property string $resourceId
 * @property string $targetAccountId
 * @property string $targetRegion
 */
class RecommendationItem extends Shape
{
    /**
     * @param array{
     *     alreadyImplemented?: bool,
     *     discoveredAlarm?: Alarm,
     *     excludeReason?: 'AlreadyImplemented'|'NotRelevant'|'ComplexityOfImplementation',
     *     excluded?: bool,
     *     latestDiscoveredExperiment?: Experiment,
     *     resourceId?: string,
     *     targetAccountId?: string,
     *     targetRegion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
