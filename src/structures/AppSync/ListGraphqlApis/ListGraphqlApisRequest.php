<?php

namespace Sunaoka\Aws\Structures\AppSync\ListGraphqlApis;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<0, 25> $maxResults
 * @property 'GRAPHQL'|'MERGED' $apiType
 * @property 'CURRENT_ACCOUNT'|'OTHER_ACCOUNTS' $owner
 */
class ListGraphqlApisRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<0, 25>,
     *     apiType?: 'GRAPHQL'|'MERGED',
     *     owner?: 'CURRENT_ACCOUNT'|'OTHER_ACCOUNTS'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
