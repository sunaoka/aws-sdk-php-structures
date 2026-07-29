<?php

namespace Sunaoka\Aws\Structures\GameLiftStreams\RevokeStreamUrl;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 * @property string $StreamUrlIdentifier
 * @property 'REVOKE_URL'|'REVOKE_AND_TERMINATE_SESSIONS'|null $RevocationMode
 */
class RevokeStreamUrlRequest extends Request
{
    /**
     * @param array{
     *     Identifier: string,
     *     StreamUrlIdentifier: string,
     *     RevocationMode?: 'REVOKE_URL'|'REVOKE_AND_TERMINATE_SESSIONS'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
