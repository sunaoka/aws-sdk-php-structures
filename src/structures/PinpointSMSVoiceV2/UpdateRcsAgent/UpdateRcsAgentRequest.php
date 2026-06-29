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
 * @property string|null $TwoWayMediaS3BucketName
 * @property string|null $TwoWayMediaS3KeyPrefix
 * @property string|null $TwoWayMediaS3Role
 * @property list<string>|null $TwoWayRcsEventsEnabled
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
     *     TwoWayEnabled?: bool|null,
     *     TwoWayMediaS3BucketName?: string|null,
     *     TwoWayMediaS3KeyPrefix?: string|null,
     *     TwoWayMediaS3Role?: string|null,
     *     TwoWayRcsEventsEnabled?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
