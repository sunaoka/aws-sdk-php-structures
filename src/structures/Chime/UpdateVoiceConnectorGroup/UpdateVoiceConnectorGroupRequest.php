<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateVoiceConnectorGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorGroupId
 * @property string $Name
 * @property list<Shapes\VoiceConnectorItem> $VoiceConnectorItems
 */
class UpdateVoiceConnectorGroupRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorGroupId: string,
     *     Name: string,
     *     VoiceConnectorItems: list<Shapes\VoiceConnectorItem>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
