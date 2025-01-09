<?php

namespace Sunaoka\Aws\Structures\Pinpoint\PutEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ApplicationId
 * @property Shapes\EventsRequest $EventsRequest
 */
class PutEventsRequest extends Request
{
    /**
     * @param array{
     *     ApplicationId: string,
     *     EventsRequest: Shapes\EventsRequest
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
