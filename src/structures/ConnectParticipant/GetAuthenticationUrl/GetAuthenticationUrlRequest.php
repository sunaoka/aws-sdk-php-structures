<?php

namespace Sunaoka\Aws\Structures\ConnectParticipant\GetAuthenticationUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SessionId
 * @property string $RedirectUri
 * @property string $ConnectionToken
 */
class GetAuthenticationUrlRequest extends Request
{
    /**
     * @param array{
     *     SessionId: string,
     *     RedirectUri: string,
     *     ConnectionToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
