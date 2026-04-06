<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<string>|null $resource
 * @property 'encryption'|'network' $type
 */
class ListSecurityPoliciesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     resource?: list<string>|null,
     *     type: 'encryption'|'network'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
