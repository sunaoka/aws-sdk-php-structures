<?php

namespace Sunaoka\Aws\Structures\Sms\GetAppReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appId
 */
class GetAppReplicationConfigurationRequest extends Request
{
    /**
     * @param array{appId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
