<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListAccessPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'data' $type
 * @property list<string>|null $resource
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListAccessPoliciesRequest extends Request
{
    /**
     * @param array{
     *     type: 'data',
     *     resource?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
