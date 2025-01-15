<?php

namespace Sunaoka\Aws\Structures\IoTThingsGraph\ListFlowExecutionMessages;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $flowExecutionId
 * @property string|null $nextToken
 * @property int<1, 250>|null $maxResults
 */
class ListFlowExecutionMessagesRequest extends Request
{
    /**
     * @param array{
     *     flowExecutionId: string,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 250>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
