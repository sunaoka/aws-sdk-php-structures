<?php

namespace Sunaoka\Aws\Structures\Emr\TerminateSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $SessionId
 */
class TerminateSessionRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     SessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
