<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\TaskList $taskList
 * @property string $identity
 * @property string $nextPageToken
 * @property int<0, 1000> $maximumPageSize
 * @property bool $reverseOrder
 * @property bool $startAtPreviousStartedEvent
 */
class PollForDecisionTaskRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     taskList: Shapes\TaskList,
     *     identity?: string,
     *     nextPageToken?: string,
     *     maximumPageSize?: int<0, 1000>,
     *     reverseOrder?: bool,
     *     startAtPreviousStartedEvent?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
