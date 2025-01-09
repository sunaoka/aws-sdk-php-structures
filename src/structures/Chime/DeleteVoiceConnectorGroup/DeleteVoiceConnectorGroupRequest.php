<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteVoiceConnectorGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorGroupId
 */
class DeleteVoiceConnectorGroupRequest extends Request
{
    /**
     * @param array{VoiceConnectorGroupId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
