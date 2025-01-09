<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\ListFlowExecutionMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowExecutionId
 * @property string $nextToken
 * @property int<1, 250> $maxResults
 */
class ListFlowExecutionMessagesRequest extends Request
{
    /**
     * @param array{
     *     flowExecutionId: string,
     *     nextToken?: string,
     *     maxResults?: int<1, 250>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
