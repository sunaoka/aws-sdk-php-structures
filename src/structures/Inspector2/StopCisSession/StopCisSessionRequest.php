<?php

namespace Sunaoka\Aws\Structures\Inspector2\StopCisSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $scanJobId
 * @property string $sessionToken
 * @property Shapes\StopCisSessionMessage $message
 */
class StopCisSessionRequest extends Request
{
    /**
     * @param array{
     *     scanJobId: string,
     *     sessionToken: string,
     *     message: Shapes\StopCisSessionMessage
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
