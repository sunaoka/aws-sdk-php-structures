<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'LOCAL'|'AGGREGATOR'|null $Type
 * @property list<string>|null $Regions
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 */
class ListIndexesRequest extends Request
{
    /**
     * @param array{
     *     Type?: 'LOCAL'|'AGGREGATOR'|null,
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
