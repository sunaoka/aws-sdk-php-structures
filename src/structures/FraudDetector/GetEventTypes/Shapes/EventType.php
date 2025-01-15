<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEventTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $description
 * @property list<string>|null $eventVariables
 * @property list<string>|null $labels
 * @property list<string>|null $entityTypes
 * @property 'ENABLED'|'DISABLED'|null $eventIngestion
 * @property IngestedEventStatistics|null $ingestedEventStatistics
 * @property string|null $lastUpdatedTime
 * @property string|null $createdTime
 * @property string|null $arn
 * @property EventOrchestration|null $eventOrchestration
 */
class EventType extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     description?: string|null,
     *     eventVariables?: list<string>|null,
     *     labels?: list<string>|null,
     *     entityTypes?: list<string>|null,
     *     eventIngestion?: 'ENABLED'|'DISABLED'|null,
     *     ingestedEventStatistics?: IngestedEventStatistics|null,
     *     lastUpdatedTime?: string|null,
     *     createdTime?: string|null,
     *     arn?: string|null,
     *     eventOrchestration?: EventOrchestration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
