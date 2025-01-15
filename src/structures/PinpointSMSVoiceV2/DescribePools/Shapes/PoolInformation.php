<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribePools\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PoolArn
 * @property string $PoolId
 * @property 'CREATING'|'ACTIVE'|'DELETING' $Status
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property bool $TwoWayEnabled
 * @property string|null $TwoWayChannelArn
 * @property string|null $TwoWayChannelRole
 * @property bool $SelfManagedOptOutsEnabled
 * @property string $OptOutListName
 * @property bool $SharedRoutesEnabled
 * @property bool $DeletionProtectionEnabled
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class PoolInformation extends Shape
{
    /**
     * @param array{
     *     PoolArn: string,
     *     PoolId: string,
     *     Status: 'CREATING'|'ACTIVE'|'DELETING',
     *     MessageType: 'TRANSACTIONAL'|'PROMOTIONAL',
     *     TwoWayEnabled: bool,
     *     TwoWayChannelArn?: string|null,
     *     TwoWayChannelRole?: string|null,
     *     SelfManagedOptOutsEnabled: bool,
     *     OptOutListName: string,
     *     SharedRoutesEnabled: bool,
     *     DeletionProtectionEnabled: bool,
     *     CreatedTimestamp: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
