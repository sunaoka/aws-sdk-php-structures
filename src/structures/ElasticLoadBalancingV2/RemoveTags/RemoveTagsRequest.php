<?php

namespace Sunaoka\Aws\Structures\ElasticLoadBalancingV2\RemoveTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ResourceArns
 * @property list<string> $TagKeys
 */
class RemoveTagsRequest extends Request
{
    /**
     * @param array{
     *     ResourceArns: list<string>,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
