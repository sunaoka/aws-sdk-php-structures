<?php

namespace Sunaoka\Aws\Structures\Sms\DeleteApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 * @property bool $forceStopAppReplication
 * @property bool $forceTerminateApp
 */
class DeleteAppRequest extends Request
{
    /**
     * @param array{
     *     appId?: string,
     *     forceStopAppReplication?: bool,
     *     forceTerminateApp?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
