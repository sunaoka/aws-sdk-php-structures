<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property list<string>|null $Regions
 * @property 'LOCAL'|'AGGREGATOR'|null $Type
 */
class ListIndexesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Regions?: list<string>|null,
     *     Type?: 'LOCAL'|'AGGREGATOR'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
