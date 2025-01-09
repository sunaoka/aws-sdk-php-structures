<?php

namespace Sunaoka\Aws\Structures\MediaConnect\ListBridges\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BridgeArn
 * @property 'CREATING'|'STANDBY'|'STARTING'|'DEPLOYING'|'ACTIVE'|'STOPPING'|'DELETING'|'DELETED'|'START_FAILED'|'START_PENDING'|'STOP_FAILED'|'UPDATING' $BridgeState
 * @property string $BridgeType
 * @property string $Name
 * @property string $PlacementArn
 */
class ListedBridge extends Shape
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     BridgeState: 'CREATING'|'STANDBY'|'STARTING'|'DEPLOYING'|'ACTIVE'|'STOPPING'|'DELETING'|'DELETED'|'START_FAILED'|'START_PENDING'|'STOP_FAILED'|'UPDATING',
     *     BridgeType: string,
     *     Name: string,
     *     PlacementArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
