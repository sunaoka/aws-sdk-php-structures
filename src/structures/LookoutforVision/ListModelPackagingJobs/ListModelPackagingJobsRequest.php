<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListModelPackagingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $NextToken
 * @property int $MaxResults
 */
class ListModelPackagingJobsRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     NextToken?: string,
     *     MaxResults?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
