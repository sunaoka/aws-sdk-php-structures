<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListSecurityPolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'encryption'|'network' $type
 * @property list<string>|null $resource
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListSecurityPoliciesRequest extends Request
{
    /**
     * @param array{
     *     type: 'encryption'|'network',
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
