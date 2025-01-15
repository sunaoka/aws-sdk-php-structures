<?php

namespace Sunaoka\Aws\Structures\Swf\PollForDecisionTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domain
 * @property Shapes\TaskList $taskList
 * @property string|null $identity
 * @property string|null $nextPageToken
 * @property int<0, 1000>|null $maximumPageSize
 * @property bool|null $reverseOrder
 * @property bool|null $startAtPreviousStartedEvent
 */
class PollForDecisionTaskRequest extends Request
{
    /**
     * @param array{
     *     domain: string,
     *     taskList: Shapes\TaskList,
     *     identity?: string|null,
     *     nextPageToken?: string|null,
     *     maximumPageSize?: int<0, 1000>|null,
     *     reverseOrder?: bool|null,
     *     startAtPreviousStartedEvent?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
