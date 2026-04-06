<?php

namespace Sunaoka\Aws\Structures\Deadline\ListSteps;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $farmId
 * @property string $jobId
 * @property int<1, 100>|null $maxResults
 * @property string|null $nextToken
 * @property string $queueId
 */
class ListStepsRequest extends Request
{
    /**
     * @param array{
     *     farmId: string,
     *     jobId: string,
     *     maxResults?: int<1, 100>|null,
     *     nextToken?: string|null,
     *     queueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
