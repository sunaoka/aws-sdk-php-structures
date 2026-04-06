<?php

namespace Sunaoka\Aws\Structures\SupplyChain\SendDataIntegrationEvent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property 'scn.data.forecast'|'scn.data.inventorylevel'|'scn.data.inboundorder'|'scn.data.inboundorderline'|'scn.data.inboundorderlineschedule'|'scn.data.outboundorderline'|'scn.data.outboundshipment'|'scn.data.processheader'|'scn.data.processoperation'|'scn.data.processproduct'|'scn.data.reservation'|'scn.data.shipment'|'scn.data.shipmentstop'|'scn.data.shipmentstoporder'|'scn.data.supplyplan' $eventType
 * @property string $data
 * @property string $eventGroupId
 * @property \Aws\Api\DateTimeResult|null $eventTimestamp
 * @property string|null $clientToken
 */
class SendDataIntegrationEventRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     eventType: 'scn.data.forecast'|'scn.data.inventorylevel'|'scn.data.inboundorder'|'scn.data.inboundorderline'|'scn.data.inboundorderlineschedule'|'scn.data.outboundorderline'|'scn.data.outboundshipment'|'scn.data.processheader'|'scn.data.processoperation'|'scn.data.processproduct'|'scn.data.reservation'|'scn.data.shipment'|'scn.data.shipmentstop'|'scn.data.shipmentstoporder'|'scn.data.supplyplan',
     *     data: string,
     *     eventGroupId: string,
     *     eventTimestamp?: \Aws\Api\DateTimeResult|null,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
