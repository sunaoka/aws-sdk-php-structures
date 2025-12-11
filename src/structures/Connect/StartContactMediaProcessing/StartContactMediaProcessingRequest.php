<?php

namespace Sunaoka\Aws\Structures\Connect\StartContactMediaProcessing;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $InstanceId
 * @property string|null $ContactId
 * @property string|null $ProcessorArn
 * @property 'DELIVER_UNPROCESSED_MESSAGE'|'DO_NOT_DELIVER_UNPROCESSED_MESSAGE'|null $FailureMode
 */
class StartContactMediaProcessingRequest extends Request
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     ContactId?: string|null,
     *     ProcessorArn?: string|null,
     *     FailureMode?: 'DELIVER_UNPROCESSED_MESSAGE'|'DO_NOT_DELIVER_UNPROCESSED_MESSAGE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
