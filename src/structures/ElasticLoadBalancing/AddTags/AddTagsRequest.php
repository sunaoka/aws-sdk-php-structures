<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancing\AddTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $LoadBalancerNames
 * @property list<Shapes\Tag> $Tags
 */
class AddTagsRequest extends Request
{
    /**
     * @param array{
     *     LoadBalancerNames: list<string>,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
