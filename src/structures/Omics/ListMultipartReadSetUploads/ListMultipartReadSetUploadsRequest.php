<?php

namespace Sunaoka\Aws\Structures\Omics\ListMultipartReadSetUploads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int $maxResults
 * @property string $nextToken
 */
class ListMultipartReadSetUploadsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int,
     *     nextToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
