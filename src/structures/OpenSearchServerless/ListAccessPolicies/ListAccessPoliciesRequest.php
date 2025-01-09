<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListAccessPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property list<string> $resource
 * @property 'data' $type
 */
class ListAccessPoliciesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     resource?: list<string>,
     *     type: 'data'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
