<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property list<string> $LogDestinationConfigs
 * @property list<FieldToMatch>|null $RedactedFields
 * @property bool|null $ManagedByFirewallManager
 * @property LoggingFilter|null $LoggingFilter
 * @property 'WAF_LOGS'|null $LogType
 * @property 'CUSTOMER'|'SECURITY_LAKE'|'CLOUDWATCH_TELEMETRY_RULE_MANAGED'|null $LogScope
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     LogDestinationConfigs: list<string>,
     *     RedactedFields?: list<FieldToMatch>|null,
     *     ManagedByFirewallManager?: bool|null,
     *     LoggingFilter?: LoggingFilter|null,
     *     LogType?: 'WAF_LOGS'|null,
     *     LogScope?: 'CUSTOMER'|'SECURITY_LAKE'|'CLOUDWATCH_TELEMETRY_RULE_MANAGED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
