<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateRcsAgent;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $RcsAgentId
 * @property bool|null $DeletionProtectionEnabled
 * @property string|null $OptOutListName
 * @property bool|null $SelfManagedOptOutsEnabled
 * @property string|null $TwoWayChannelArn
 * @property string|null $TwoWayChannelRole
 * @property bool|null $TwoWayEnabled
 */
class UpdateRcsAgentRequest extends Request
{
    /**
     * @param array{
     *     RcsAgentId: string,
     *     DeletionProtectionEnabled?: bool|null,
     *     OptOutListName?: string|null,
     *     SelfManagedOptOutsEnabled?: bool|null,
     *     TwoWayChannelArn?: string|null,
     *     TwoWayChannelRole?: string|null,
     *     TwoWayEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
