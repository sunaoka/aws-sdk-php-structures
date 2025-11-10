<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property 'WAF_LOGS'|null $LogType
 * @property 'CUSTOMER'|'SECURITY_LAKE'|'CLOUDWATCH_TELEMETRY_RULE_MANAGED'|null $LogScope
 */
class GetLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     LogType?: 'WAF_LOGS'|null,
     *     LogScope?: 'CUSTOMER'|'SECURITY_LAKE'|'CLOUDWATCH_TELEMETRY_RULE_MANAGED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
