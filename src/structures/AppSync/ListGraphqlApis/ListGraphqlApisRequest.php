<?php

namespace Sunaoka\Aws\Structures\AppSync\ListGraphqlApis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $nextToken
 * @property int<0, 25>|null $maxResults
 * @property 'GRAPHQL'|'MERGED'|null $apiType
 * @property 'CURRENT_ACCOUNT'|'OTHER_ACCOUNTS'|null $owner
 */
class ListGraphqlApisRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string|null,
     *     maxResults?: int<0, 25>|null,
     *     apiType?: 'GRAPHQL'|'MERGED'|null,
     *     owner?: 'CURRENT_ACCOUNT'|'OTHER_ACCOUNTS'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
