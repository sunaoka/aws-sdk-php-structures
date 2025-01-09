<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListLifecyclePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $maxResults
 * @property string $nextToken
 * @property list<string> $resources
 * @property 'retention' $type
 */
class ListLifecyclePoliciesRequest extends Request
{
    /**
     * @param array{
     *     maxResults?: int,
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
