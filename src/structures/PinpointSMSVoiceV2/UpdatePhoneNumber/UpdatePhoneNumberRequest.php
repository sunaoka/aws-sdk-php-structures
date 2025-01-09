<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdatePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property bool $TwoWayEnabled
 * @property string $TwoWayChannelArn
 * @property string $TwoWayChannelRole
 * @property bool $SelfManagedOptOutsEnabled
 * @property string $OptOutListName
 * @property bool $DeletionProtectionEnabled
 */
class UpdatePhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     TwoWayEnabled?: bool,
     *     TwoWayChannelArn?: string,
     *     TwoWayChannelRole?: string,
     *     SelfManagedOptOutsEnabled?: bool,
     *     OptOutListName?: string,
     *     DeletionProtectionEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
