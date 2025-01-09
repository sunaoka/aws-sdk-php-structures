<?php

namespace Sunaoka\Aws\Structures\WorkSpacesWeb\GetSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $portalId
 * @property string $sessionId
 */
class GetSessionRequest extends Request
{
    /**
     * @param array{
     *     portalId: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
