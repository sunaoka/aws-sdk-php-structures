<?php

namespace Sunaoka\Aws\Structures\Notifications\GetEventRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $notificationConfigurationArn
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property string $source
 * @property string $eventType
 * @property string $eventPattern
 * @property list<string> $regions
 * @property list<string> $managedRules
 * @property array<string, Shapes\EventRuleStatusSummary> $statusSummaryByRegion
 */
class GetEventRuleResponse extends Response
{
}
