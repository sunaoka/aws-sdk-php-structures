<?php

namespace Sunaoka\Aws\Structures\Connect\UpdateParticipantRoleConfig;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InstanceId
 * @property string $ContactId
 * @property Shapes\UpdateParticipantRoleConfigChannelInfo $ChannelConfiguration
 */
class UpdateParticipantRoleConfigRequest extends Request
{
    /**
     * @param array{
     *     InstanceId: string,
     *     ContactId: string,
     *     ChannelConfiguration: Shapes\UpdateParticipantRoleConfigChannelInfo
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
