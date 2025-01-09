<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasetImportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetArn
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListDatasetImportJobsRequest extends Request
{
    /**
     * @param array{
     *     datasetArn?: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 100>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
