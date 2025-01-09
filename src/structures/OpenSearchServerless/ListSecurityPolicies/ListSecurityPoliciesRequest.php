<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property list<string> $resource
 * @property 'encryption'|'network' $type
 */
class ListSecurityPoliciesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
     *     nextToken?: string,
     *     resource?: list<string>,
     *     type: 'encryption'|'network'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
