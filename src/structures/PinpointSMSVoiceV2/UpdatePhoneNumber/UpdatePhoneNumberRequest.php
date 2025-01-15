<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdatePhoneNumber;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $PhoneNumberId
 * @property bool|null $TwoWayEnabled
 * @property string|null $TwoWayChannelArn
 * @property string|null $TwoWayChannelRole
 * @property bool|null $SelfManagedOptOutsEnabled
 * @property string|null $OptOutListName
 * @property bool|null $DeletionProtectionEnabled
 */
class UpdatePhoneNumberRequest extends Request
{
    /**
     * @param array{
     *     PhoneNumberId: string,
     *     TwoWayEnabled?: bool|null,
     *     TwoWayChannelArn?: string|null,
     *     TwoWayChannelRole?: string|null,
     *     SelfManagedOptOutsEnabled?: bool|null,
     *     OptOutListName?: string|null,
     *     DeletionProtectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
