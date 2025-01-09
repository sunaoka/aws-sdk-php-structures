<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class GetAppReplicationConfigurationRequest extends Request
{
    /**
     * @param array{appId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
