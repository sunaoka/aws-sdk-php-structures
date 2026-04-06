<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationEvents;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $instanceId
 * @property 'scn.data.forecast'|'scn.data.inventorylevel'|'scn.data.inboundorder'|'scn.data.inboundorderline'|'scn.data.inboundorderlineschedule'|'scn.data.outboundorderline'|'scn.data.outboundshipment'|'scn.data.processheader'|'scn.data.processoperation'|'scn.data.processproduct'|'scn.data.reservation'|'scn.data.shipment'|'scn.data.shipmentstop'|'scn.data.shipmentstoporder'|'scn.data.supplyplan'|'scn.data.dataset'|null $eventType
 * @property string|null $nextToken
 * @property int<1, 20>|null $maxResults
 */
class ListDataIntegrationEventsRequest extends Request
{
    /**
     * @param array{
     *     instanceId: string,
     *     eventType?: 'scn.data.forecast'|'scn.data.inventorylevel'|'scn.data.inboundorder'|'scn.data.inboundorderline'|'scn.data.inboundorderlineschedule'|'scn.data.outboundorderline'|'scn.data.outboundshipment'|'scn.data.processheader'|'scn.data.processoperation'|'scn.data.processproduct'|'scn.data.reservation'|'scn.data.shipment'|'scn.data.shipmentstop'|'scn.data.shipmentstoporder'|'scn.data.supplyplan'|'scn.data.dataset'|null,
     *     nextToken?: string|null,
     *     maxResults?: int<1, 20>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
