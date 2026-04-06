<?php

namespace Sunaoka\Aws\Structures\LookoutforVision\DescribeModelPackagingJob;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ProjectName
 * @property string $JobName
 */
class DescribeModelPackagingJobRequest extends Request
{
    /**
     * @param array{
     *     ProjectName: string,
     *     JobName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
