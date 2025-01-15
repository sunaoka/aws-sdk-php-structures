<?php

namespace Sunaoka\Aws\Structures\Sms\TerminateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $appId
 */
class TerminateAppRequest extends Request
{
    /**
     * @param array{appId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
