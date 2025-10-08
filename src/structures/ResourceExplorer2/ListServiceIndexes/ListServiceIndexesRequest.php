<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListServiceIndexes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string>|null $Regions
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListServiceIndexesRequest extends Request
{
    /**
     * @param array{
     *     Regions?: list<string>|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
