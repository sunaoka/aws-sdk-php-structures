<?php

namespace Sunaoka\Aws\Structures\Notifications\ListEventRules\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $notificationConfigurationArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $source
 * @property string $eventType
 * @property string $eventPattern
 * @property list<string> $regions
 * @property list<string> $managedRules
 * @property array<string, EventRuleStatusSummary> $statusSummaryByRegion
 */
class EventRuleStructure extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     notificationConfigurationArn: string,
     *     creationTime: \Aws\Api\DateTimeResult,
     *     source: string,
     *     eventType: string,
     *     eventPattern: string,
     *     regions: list<string>,
     *     managedRules: list<string>,
     *     statusSummaryByRegion: array<string, EventRuleStatusSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
