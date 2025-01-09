<?php

namespace Sunaoka\Aws\Structures\WAFV2\GetLoggingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property 'WAF_LOGS' $LogType
 * @property 'CUSTOMER'|'SECURITY_LAKE' $LogScope
 */
class GetLoggingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     LogType?: 'WAF_LOGS',
     *     LogScope?: 'CUSTOMER'|'SECURITY_LAKE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
