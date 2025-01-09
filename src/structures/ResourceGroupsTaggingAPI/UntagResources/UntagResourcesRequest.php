<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\UntagResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ResourceARNList
 * @property list<string> $TagKeys
 */
class UntagResourcesRequest extends Request
{
    /**
     * @param array{
     *     ResourceARNList: list<string>,
     *     TagKeys: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
