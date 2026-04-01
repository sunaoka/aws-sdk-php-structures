<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'APPLICATION_LOGS'|'USAGE_LOGS'|'SECURITY_FINDING_LOGS'|'ACCESS_LOGS'|'CONNECTION_LOGS'>|null $LogTypes
 */
class LogDeliveryParameters extends Shape
{
    /**
     * @param array{LogTypes?: list<'APPLICATION_LOGS'|'USAGE_LOGS'|'SECURITY_FINDING_LOGS'|'ACCESS_LOGS'|'CONNECTION_LOGS'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
