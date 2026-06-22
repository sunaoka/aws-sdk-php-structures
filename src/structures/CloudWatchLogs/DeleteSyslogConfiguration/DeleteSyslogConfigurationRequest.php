<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DeleteSyslogConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $logGroupIdentifier
 * @property string|null $vpcEndpointId
 */
class DeleteSyslogConfigurationRequest extends Request
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
