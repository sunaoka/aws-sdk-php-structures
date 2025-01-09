<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int $maxResults
 * @property string $nextToken
 * @property Shapes\ReadSetFilter $filter
 */
class ListReadSetsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int,
     *     nextToken?: string,
     *     filter?: Shapes\ReadSetFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
