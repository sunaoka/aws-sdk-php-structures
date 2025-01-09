<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListLifecyclePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property list<string> $resources
 * @property 'retention' $type
 */
class ListLifecyclePoliciesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     resources?: list<string>,
     *     type: 'retention'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
