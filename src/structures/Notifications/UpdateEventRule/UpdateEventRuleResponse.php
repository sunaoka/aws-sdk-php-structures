<?php

namespace Sunaoka\Aws\Structures\Notifications\UpdateEventRule;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $arn
 * @property string $notificationConfigurationArn
 * @property array<string, Shapes\EventRuleStatusSummary> $statusSummaryByRegion
 */
class UpdateEventRuleResponse extends Response
{
}
