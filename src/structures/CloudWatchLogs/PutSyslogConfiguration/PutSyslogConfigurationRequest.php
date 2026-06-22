<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutSyslogConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 * @property string|null $vpcEndpointId
 */
class PutSyslogConfigurationRequest extends Request
{
    /**
     * @param array{
     *     logGroupIdentifier: string,
     *     vpcEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
