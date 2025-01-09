<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventId
 * @property string $eventTypeName
 */
class GetEventRequest extends Request
{
    /**
     * @param array{
     *     eventId: string,
     *     eventTypeName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
