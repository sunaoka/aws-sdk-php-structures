<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\UpdatePhoneNumberSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CallingName
 */
class UpdatePhoneNumberSettingsRequest extends Request
{
    /**
     * @param array{CallingName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
