<?php

namespace Sunaoka\Aws\Structures\QApps\GetQApp;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $appId
 */
class GetQAppRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     appId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
