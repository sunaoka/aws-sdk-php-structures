<?php

namespace Sunaoka\Aws\Structures\Sms\DeleteApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appId
 * @property bool|null $forceStopAppReplication
 * @property bool|null $forceTerminateApp
 */
class DeleteAppRequest extends Request
{
    /**
     * @param array{
     *     appId?: string|null,
     *     forceStopAppReplication?: bool|null,
     *     forceTerminateApp?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
