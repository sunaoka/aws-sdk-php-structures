<?php

namespace Sunaoka\Aws\Structures\Omics\ListReadSetUploadParts;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property string $uploadId
 * @property 'SOURCE1'|'SOURCE2' $partSource
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property Shapes\ReadSetUploadPartListFilter|null $filter
 */
class ListReadSetUploadPartsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     uploadId: string,
     *     partSource: 'SOURCE1'|'SOURCE2',
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     filter?: Shapes\ReadSetUploadPartListFilter|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
