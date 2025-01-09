<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property int $MaxResults
 * @property string $NextToken
 * @property string $ProjectName
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     DatasetName?: string,
     *     MaxResults?: int,
     *     NextToken?: string,
     *     ProjectName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
