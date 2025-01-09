<?php

namespace Sunaoka\Aws\Structures\Polly\ListSpeechSynthesisTasks;

use Sunaoka\Aws\Structures\Request;

/**
 * @property int $MaxResults
 * @property string $NextToken
 * @property 'scheduled'|'inProgress'|'completed'|'failed' $Status
 */
class ListSpeechSynthesisTasksRequest extends Request
{
    /**
     * @param array{
     *     MaxResults?: int,
     *     NextToken?: string,
     *     Status?: 'scheduled'|'inProgress'|'completed'|'failed'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
