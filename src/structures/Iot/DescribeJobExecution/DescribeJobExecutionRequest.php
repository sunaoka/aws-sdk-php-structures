<?php

namespace Sunaoka\Aws\Structures\Iot\DescribeJobExecution;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $jobId
 * @property string $thingName
 * @property int|null $executionNumber
 */
class DescribeJobExecutionRequest extends Request
{
    /**
     * @param array{
     *     jobId: string,
     *     thingName: string,
     *     executionNumber?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
