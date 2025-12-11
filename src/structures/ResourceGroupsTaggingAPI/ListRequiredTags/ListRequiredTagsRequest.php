<?php

namespace Sunaoka\Aws\Structures\ResourceGroupsTaggingAPI\ListRequiredTags;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<1, 200>|null $MaxResults
 */
class ListRequiredTagsRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 200>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
