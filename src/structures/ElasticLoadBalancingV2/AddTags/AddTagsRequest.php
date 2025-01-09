<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\AddTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ResourceArns
 * @property list<Shapes\Tag> $Tags
 */
class AddTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceArns: list<string>,
     *     Tags: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
