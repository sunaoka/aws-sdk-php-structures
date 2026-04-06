<?php

namespace Sunaoka\Aws\Structures\WorkspacesInstances\ListRegions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 25>|null $MaxResults
 * @property string|null $NextToken
 */
class ListRegionsRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 25>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
