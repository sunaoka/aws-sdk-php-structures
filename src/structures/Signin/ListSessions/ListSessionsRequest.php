<?php

namespace Sunaoka\Aws\Structures\Signin\ListSessions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $principalArn
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'ACTIVE'|'REVOKED'|null $status
 * @property string|null $clientId
 * @property int|null $issuedAfter
 * @property int|null $issuedBefore
 */
class ListSessionsRequest extends Request
{
    /**
     * @param array{
     *     principalArn?: string|null,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     status?: 'ACTIVE'|'REVOKED'|null,
     *     clientId?: string|null,
     *     issuedAfter?: int|null,
     *     issuedBefore?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
