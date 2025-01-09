<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\SetDefaultMessageType;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 */
class SetDefaultMessageTypeRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     MessageType: 'TRANSACTIONAL'|'PROMOTIONAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
