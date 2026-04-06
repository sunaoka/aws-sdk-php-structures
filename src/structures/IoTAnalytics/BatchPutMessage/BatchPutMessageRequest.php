<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\BatchPutMessage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelName
 * @property list<Shapes\Message> $messages
 */
class BatchPutMessageRequest extends Request
{
    /**
     * @param array{
     *     channelName: string,
     *     messages: list<Shapes\Message>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
