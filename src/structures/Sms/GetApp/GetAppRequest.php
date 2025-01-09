<?php

namespace Sunaoka\Aws\Structures\Sms\GetApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appId
 */
class GetAppRequest extends Request
{
    /**
     * @param array{appId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
