<?php

namespace Sunaoka\Aws\Structures\Deadline\ListStepDependencies;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $jobId
 * @property int<1, 1000>|null $maxResults
 * @property string|null $nextToken
 * @property string $queueId
 * @property string $stepId
 */
class ListStepDependenciesRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     jobId: string,
     *     maxResults?: int<1, 1000>|null,
     *     nextToken?: string|null,
     *     queueId: string,
     *     stepId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
