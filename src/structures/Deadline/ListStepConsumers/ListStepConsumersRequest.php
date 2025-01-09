<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStepConsumers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $queueId
 * @property string $jobId
 * @property string $stepId
 * @property string $nextToken
 * @property int<1, 1000> $maxResults
 */
class ListStepConsumersRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     queueId: string,
     *     jobId: string,
     *     stepId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 1000>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
