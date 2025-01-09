<?php

namespace Sunaoka\Aws\Structures\FraudDetector\GetDeleteEventsByEventTypeStatus;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $eventTypeName
 */
class GetDeleteEventsByEventTypeStatusRequest extends Request
{
    /**
     * @param array{eventTypeName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
