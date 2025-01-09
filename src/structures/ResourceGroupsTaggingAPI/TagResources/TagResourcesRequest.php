<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\TagResources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $ResourceARNList
 * @property array<string, string> $Tags
 */
class TagResourcesRequest extends Request
{
    /**
     * @param array{
     *     ResourceARNList: list<string>,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
