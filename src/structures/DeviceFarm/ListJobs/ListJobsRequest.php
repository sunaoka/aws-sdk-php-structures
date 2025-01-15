<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListJobs;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property string|null $nextToken
 */
class ListJobsRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     nextToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
