<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasetExportJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $datasetArn
 * @property string|null $nextToken
 * @property int<1, 100>|null $maxResults
 */
class ListDatasetExportJobsRequest extends Request
{
    /**
     * @param array{
     *     datasetArn?: string|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
