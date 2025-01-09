<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\RemoveTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LoadBalancerNames
 * @property list<Shapes\TagKeyOnly> $Tags
 */
class RemoveTagsRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerNames: list<string>,
     *     Tags: list<Shapes\TagKeyOnly>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
