<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasetExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $datasetArn
 * @property string $nextToken
 * @property int $maxResults
 */
class ListDatasetExportJobsRequest extends Request
{
    /**
     * @param array{
     *     datasetArn?: string,
     *     nextToken?: string,
     *     maxResults?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
