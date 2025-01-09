<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListSupportedResourceTypes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 */
class ListSupportedResourceTypesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
