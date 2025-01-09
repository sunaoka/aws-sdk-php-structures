<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property Shapes\ReadSetFilter $filter
 */
class ListReadSetsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     filter?: Shapes\ReadSetFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
