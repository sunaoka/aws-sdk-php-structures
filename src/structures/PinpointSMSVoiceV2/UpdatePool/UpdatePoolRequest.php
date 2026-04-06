<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdatePool;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PoolId
 * @property bool|null $TwoWayEnabled
 * @property string|null $TwoWayChannelArn
 * @property string|null $TwoWayChannelRole
 * @property bool|null $SelfManagedOptOutsEnabled
 * @property string|null $OptOutListName
 * @property bool|null $SharedRoutesEnabled
 * @property bool|null $DeletionProtectionEnabled
 */
class UpdatePoolRequest extends Request
{
    /**
     * @param array{
     *     PoolId: string,
     *     TwoWayEnabled?: bool|null,
     *     TwoWayChannelArn?: string|null,
     *     TwoWayChannelRole?: string|null,
     *     SelfManagedOptOutsEnabled?: bool|null,
     *     OptOutListName?: string|null,
     *     SharedRoutesEnabled?: bool|null,
     *     DeletionProtectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
