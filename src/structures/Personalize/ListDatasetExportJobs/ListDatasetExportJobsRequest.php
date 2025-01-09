<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasetExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetArn
 * @property string $nextToken
 * @property int<1, 100> $maxResults
 */
class ListDatasetExportJobsRequest extends Request
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
