<?php

namespace Sunaoka\Aws\Structures\AccountAccessRuntime\ListRoles;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $tenantId
 * @property int|null $maxResults
 * @property string|null $nextToken
 */
class ListRolesRequest extends Request
{
    /**
     * @param array{
     *     tenantId: string,
     *     maxResults?: int|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
