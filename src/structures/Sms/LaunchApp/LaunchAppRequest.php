<?php

namespace Sunaoka\Aws\Structures\Sms\LaunchApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class LaunchAppRequest extends Request
{
    /**
     * @param array{appId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
