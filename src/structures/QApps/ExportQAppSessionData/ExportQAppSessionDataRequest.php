<?php

namespace Sunaoka\Aws\Structures\QApps\ExportQAppSessionData;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $sessionId
 */
class ExportQAppSessionDataRequest extends Request
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
