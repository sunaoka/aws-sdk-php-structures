<?php

namespace Sunaoka\Aws\Structures\QApps\StopQAppSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $sessionId
 */
class StopQAppSessionRequest extends Request
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
