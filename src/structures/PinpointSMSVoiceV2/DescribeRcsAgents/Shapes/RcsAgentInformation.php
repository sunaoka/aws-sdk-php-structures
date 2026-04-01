<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DescribeRcsAgents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $RcsAgentArn
 * @property string $RcsAgentId
 * @property 'CREATED'|'PENDING'|'TESTING'|'PARTIAL'|'ACTIVE'|'DELETED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property bool $DeletionProtectionEnabled
 * @property string|null $OptOutListName
 * @property bool $SelfManagedOptOutsEnabled
 * @property string|null $TwoWayChannelArn
 * @property string|null $TwoWayChannelRole
 * @property bool $TwoWayEnabled
 * @property string|null $PoolId
 * @property TestingAgentInformation|null $TestingAgent
 */
class RcsAgentInformation extends Shape
{
    /**
     * @param array{
     *     RcsAgentArn: string,
     *     RcsAgentId: string,
     *     Status: 'CREATED'|'PENDING'|'TESTING'|'PARTIAL'|'ACTIVE'|'DELETED',
     *     CreatedTimestamp: \Aws\Api\DateTimeResult,
     *     DeletionProtectionEnabled: bool,
     *     OptOutListName?: string|null,
     *     SelfManagedOptOutsEnabled: bool,
     *     TwoWayChannelArn?: string|null,
     *     TwoWayChannelRole?: string|null,
     *     TwoWayEnabled: bool,
     *     PoolId?: string|null,
     *     TestingAgent?: TestingAgentInformation|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
