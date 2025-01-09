<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetUploadParts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property string $uploadId
 * @property 'SOURCE1'|'SOURCE2' $partSource
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 * @property Shapes\ReadSetUploadPartListFilter $filter
 */
class ListReadSetUploadPartsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     uploadId: string,
     *     partSource: 'SOURCE1'|'SOURCE2',
     *     maxResults?: int<1, 100>,
     *     nextToken?: string,
     *     filter?: Shapes\ReadSetUploadPartListFilter
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
