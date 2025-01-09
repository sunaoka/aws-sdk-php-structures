<?php

namespace Sunaoka\Aws\Structures\SSO\ListAccountRoles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 * @property string $accessToken
 * @property string $accountId
 */
class ListAccountRolesRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 100>,
     *     accessToken: string,
     *     accountId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
