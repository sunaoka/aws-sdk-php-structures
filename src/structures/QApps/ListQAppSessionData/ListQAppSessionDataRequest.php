<?php

namespace Sunaoka\Aws\Structures\QApps\ListQAppSessionData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $sessionId
 */
class ListQAppSessionDataRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
