<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\ListIndexes;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property list<string> $Regions
 * @property 'LOCAL'|'AGGREGATOR' $Type
 */
class ListIndexesRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     Regions?: list<string>,
     *     Type?: 'LOCAL'|'AGGREGATOR'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
