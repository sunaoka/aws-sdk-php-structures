<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DatasetName
 * @property int<1, 100> $MaxResults
 * @property string $NextToken
 * @property string $ProjectName
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     DatasetName?: string,
     *     MaxResults?: int<1, 100>,
     *     NextToken?: string,
     *     ProjectName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
