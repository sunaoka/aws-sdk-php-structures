<?php

namespace Sunaoka\Aws\Structures\Inspector2\StopCisSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\StopCisSessionMessage $message
 * @property string $scanJobId
 * @property string $sessionToken
 */
class StopCisSessionRequest extends Request
{
    /**
     * @param array{
     *     message: Shapes\StopCisSessionMessage,
     *     scanJobId: string,
     *     sessionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
