<?php

namespace Sunaoka\Aws\Structures\Sms\DeleteAppReplicationConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class DeleteAppReplicationConfigurationRequest extends Request
{
    /**
     * @param array{appId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
