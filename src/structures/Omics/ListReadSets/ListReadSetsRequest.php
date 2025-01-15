<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSets;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\ReadSetFilter|null $filter
 */
class ListReadSetsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filter?: Shapes\ReadSetFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
