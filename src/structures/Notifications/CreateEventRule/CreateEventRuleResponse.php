<?php

namespace Sunaoka\Aws\Structures\Notifications\CreateEventRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $notificationConfigurationArn
 * @property array<string, Shapes\EventRuleStatusSummary> $statusSummaryByRegion
 */
class CreateEventRuleResponse extends Response
{
}
