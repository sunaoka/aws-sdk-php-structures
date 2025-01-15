<?php

namespace Sunaoka\Aws\Structures\ChimeSDKVoice\CreateVoiceConnectorGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property list<Shapes\VoiceConnectorItem>|null $VoiceConnectorItems
 */
class CreateVoiceConnectorGroupRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     VoiceConnectorItems?: list<Shapes\VoiceConnectorItem>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
