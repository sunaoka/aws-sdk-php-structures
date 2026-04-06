<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $instanceId
 * @property string $eventId
 * @property 'scn.data.forecast'|'scn.data.inventorylevel'|'scn.data.inboundorder'|'scn.data.inboundorderline'|'scn.data.inboundorderlineschedule'|'scn.data.outboundorderline'|'scn.data.outboundshipment'|'scn.data.processheader'|'scn.data.processoperation'|'scn.data.processproduct'|'scn.data.reservation'|'scn.data.shipment'|'scn.data.shipmentstop'|'scn.data.shipmentstoporder'|'scn.data.supplyplan'|'scn.data.dataset' $eventType
 * @property string $eventGroupId
 * @property \Aws\Api\DateTimeResult $eventTimestamp
 * @property DataIntegrationEventDatasetTargetDetails|null $datasetTargetDetails
 */
class DataIntegrationEvent extends Shape
{
    /**
     * @param array{
     *     instanceId: string,
     *     eventId: string,
     *     eventType: 'scn.data.forecast'|'scn.data.inventorylevel'|'scn.data.inboundorder'|'scn.data.inboundorderline'|'scn.data.inboundorderlineschedule'|'scn.data.outboundorderline'|'scn.data.outboundshipment'|'scn.data.processheader'|'scn.data.processoperation'|'scn.data.processproduct'|'scn.data.reservation'|'scn.data.shipment'|'scn.data.shipmentstop'|'scn.data.shipmentstoporder'|'scn.data.supplyplan'|'scn.data.dataset',
     *     eventGroupId: string,
     *     eventTimestamp: \Aws\Api\DateTimeResult,
     *     datasetTargetDetails?: DataIntegrationEventDatasetTargetDetails|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
