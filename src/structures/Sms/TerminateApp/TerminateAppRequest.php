<?php

namespace Sunaoka\Aws\Structures\Sms\TerminateApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class TerminateAppRequest extends Request
{
    /**
     * @param array{appId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
