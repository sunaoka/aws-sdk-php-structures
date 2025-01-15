<?php

namespace Sunaoka\Aws\Structures\IoTJobsDataPlane\DescribeJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $thingName
 * @property bool|null $includeJobDocument
 * @property int|null $executionNumber
 */
class DescribeJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     thingName: string,
     *     includeJobDocument?: bool|null,
     *     executionNumber?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
