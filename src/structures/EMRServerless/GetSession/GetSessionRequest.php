<?php

namespace Sunaoka\Aws\Structures\EMRServerless\GetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $applicationId
 * @property string $sessionId
 */
class GetSessionRequest extends Request
{
    /**
     * @param array{
     *     applicationId: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
