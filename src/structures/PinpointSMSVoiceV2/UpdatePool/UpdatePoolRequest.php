<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdatePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property bool $TwoWayEnabled
 * @property string $TwoWayChannelArn
 * @property string $TwoWayChannelRole
 * @property bool $SelfManagedOptOutsEnabled
 * @property string $OptOutListName
 * @property bool $SharedRoutesEnabled
 * @property bool $DeletionProtectionEnabled
 */
class UpdatePoolRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     TwoWayEnabled?: bool,
     *     TwoWayChannelArn?: string,
     *     TwoWayChannelRole?: string,
     *     SelfManagedOptOutsEnabled?: bool,
     *     OptOutListName?: string,
     *     SharedRoutesEnabled?: bool,
     *     DeletionProtectionEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
