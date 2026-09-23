<?php

namespace Sunaoka\Aws\Structures\NetworkSecurityManager\ListRules;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property 'ACTIVE'|'DRAFT'|'DISABLED'|null $status
 */
class ListRulesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     status?: 'ACTIVE'|'DRAFT'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
