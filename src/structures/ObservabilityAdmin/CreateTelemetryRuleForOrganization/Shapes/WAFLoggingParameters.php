<?php

namespace Sunaoka\Aws\Structures\ObservabilityAdmin\CreateTelemetryRuleForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<FieldToMatch>|null $RedactedFields
 * @property LoggingFilter|null $LoggingFilter
 * @property 'WAF_LOGS'|null $LogType
 */
class WAFLoggingParameters extends Shape
{
    /**
     * @param array{
     *     RedactedFields?: list<FieldToMatch>|null,
     *     LoggingFilter?: LoggingFilter|null,
     *     LogType?: 'WAF_LOGS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
