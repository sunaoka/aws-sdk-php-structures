<?php

namespace Sunaoka\Aws\Structures\GlueDataBrew\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $DatasetName
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property string|null $ProjectName
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     DatasetName?: string|null,
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     ProjectName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
