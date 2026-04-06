<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListAccessPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<string>|null $resource
 * @property 'data' $type
 */
class ListAccessPoliciesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     resource?: list<string>|null,
     *     type: 'data'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
