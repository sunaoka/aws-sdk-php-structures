<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateSenderId;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SenderId
 * @property string $IsoCountryCode
 * @property bool|null $DeletionProtectionEnabled
 */
class UpdateSenderIdRequest extends Request
{
    /**
     * @param array{
     *     SenderId: string,
     *     IsoCountryCode: string,
     *     DeletionProtectionEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
