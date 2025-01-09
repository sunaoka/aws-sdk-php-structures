<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasetGroups;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListDatasetGroupsRequest extends Request
{
    /**
     * @param array{
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
