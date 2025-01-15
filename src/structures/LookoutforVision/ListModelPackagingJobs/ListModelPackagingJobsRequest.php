<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\ListModelPackagingJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string|null $NextToken
 * @property int<1, 100>|null $MaxResults
 */
class ListModelPackagingJobsRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     NextToken?: string|null,
     *     MaxResults?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
