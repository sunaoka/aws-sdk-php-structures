<?php

namespace Sunaoka\Aws\Structures\Polly\ListSpeechSynthesisTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int<1, 100>|null $MaxResults
 * @property string|null $NextToken
 * @property 'scheduled'|'inProgress'|'completed'|'failed'|null $Status
 */
class ListSpeechSynthesisTasksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int<1, 100>|null,
     *     NextToken?: string|null,
     *     Status?: 'scheduled'|'inProgress'|'completed'|'failed'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
