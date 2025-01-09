<?php

namespace Sunaoka\Aws\Structures\WAFV2\ListLoggingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ResourceArn
 * @property list<string> $LogDestinationConfigs
 * @property list<FieldToMatch> $RedactedFields
 * @property bool $ManagedByFirewallManager
 * @property LoggingFilter $LoggingFilter
 * @property 'WAF_LOGS' $LogType
 * @property 'CUSTOMER'|'SECURITY_LAKE' $LogScope
 */
class LoggingConfiguration extends Shape
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     LogDestinationConfigs: list<string>,
     *     RedactedFields?: list<FieldToMatch>,
     *     ManagedByFirewallManager?: bool,
     *     LoggingFilter?: LoggingFilter,
     *     LogType?: 'WAF_LOGS',
     *     LogScope?: 'CUSTOMER'|'SECURITY_LAKE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
