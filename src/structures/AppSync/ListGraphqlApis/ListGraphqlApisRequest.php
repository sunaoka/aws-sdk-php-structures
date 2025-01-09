<?php

namespace Sunaoka\Aws\Structures\AppSync\ListGraphqlApis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int $maxResults
 * @property 'GRAPHQL'|'MERGED' $apiType
 * @property 'CURRENT_ACCOUNT'|'OTHER_ACCOUNTS' $owner
 */
class ListGraphqlApisRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int,
     *     apiType?: 'GRAPHQL'|'MERGED',
     *     owner?: 'CURRENT_ACCOUNT'|'OTHER_ACCOUNTS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
