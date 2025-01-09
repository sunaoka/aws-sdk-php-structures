<?php

namespace Sunaoka\Aws\Structures\Polly\GetSpeechSynthesisTask;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TaskId
 */
class GetSpeechSynthesisTaskRequest extends Request
{
    /**
     * @param array{TaskId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
