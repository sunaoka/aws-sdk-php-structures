<?php

namespace Sunaoka\Aws\Structures\OpenSearchServerless\ListIngestionJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $collectionId
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListIngestionJobsRequest extends Request
{
    /**
     * @param array{
     *     collectionId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
