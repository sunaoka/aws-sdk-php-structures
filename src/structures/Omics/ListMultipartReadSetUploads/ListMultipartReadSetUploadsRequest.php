<?php

namespace Sunaoka\Aws\Structures\Omics\ListMultipartReadSetUploads;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $sequenceStoreId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 */
class ListMultipartReadSetUploadsRequest extends Request
{
    /**
     * @param array{
     *     sequenceStoreId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
