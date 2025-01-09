<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteDefaultMessageType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 */
class DeleteDefaultMessageTypeRequest extends Request
{
    /**
     * @param array{ConfigurationSetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
