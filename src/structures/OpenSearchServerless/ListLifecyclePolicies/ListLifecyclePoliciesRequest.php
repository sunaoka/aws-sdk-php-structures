<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListLifecyclePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property list<string>|null $resources
 * @property 'retention' $type
 */
class ListLifecyclePoliciesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     resources?: list<string>|null,
     *     type: 'retention'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
