<?php

namespace Sunaoka\Aws\Structures\Omics\ListMultipartReadSetUploads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int<1, 100> $maxResults
 * @property string $nextToken
 */
class ListMultipartReadSetUploadsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int<1, 100>,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
