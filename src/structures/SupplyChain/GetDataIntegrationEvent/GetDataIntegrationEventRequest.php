<?php

namespace Sunaoka\Aws\Structures\SupplyChain\GetDataIntegrationEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property string $eventId
 */
class GetDataIntegrationEventRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     eventId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
