<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $description
 * @property list<string> $eventVariables
 * @property list<string> $labels
 * @property list<string> $entityTypes
 * @property 'ENABLED'|'DISABLED' $eventIngestion
 * @property IngestedEventStatistics $ingestedEventStatistics
 * @property string $lastUpdatedTime
 * @property string $createdTime
 * @property string $arn
 * @property EventOrchestration $eventOrchestration
 */
class EventType extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     description?: string,
     *     eventVariables?: list<string>,
     *     labels?: list<string>,
     *     entityTypes?: list<string>,
     *     eventIngestion?: 'ENABLED'|'DISABLED',
     *     ingestedEventStatistics?: IngestedEventStatistics,
     *     lastUpdatedTime?: string,
     *     createdTime?: string,
     *     arn?: string,
     *     eventOrchestration?: EventOrchestration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
