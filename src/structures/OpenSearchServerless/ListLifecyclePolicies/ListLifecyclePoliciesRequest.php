<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListLifecyclePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'retention' $type
 * @property list<string>|null $resources
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListLifecyclePoliciesRequest extends Request
{
    /**
     * @param array{
     *     type: 'retention',
     *     resources?: list<string>|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
