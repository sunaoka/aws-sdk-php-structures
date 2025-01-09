<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\DescribeJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $thingName
 * @property bool $includeJobDocument
 * @property int $executionNumber
 */
class DescribeJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     thingName: string,
     *     includeJobDocument?: bool,
     *     executionNumber?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
