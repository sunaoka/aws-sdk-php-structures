<?php

namespace Sunaoka\Aws\Structures\imagebuilder\ListLifecyclePolicies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<Shapes\Filter> $filters
 * @property int $maxResults
 * @property string $nextToken
 */
class ListLifecyclePoliciesRequest extends Request
{
    /**
     * @param array{
     *     filters?: list<Shapes\Filter>,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
