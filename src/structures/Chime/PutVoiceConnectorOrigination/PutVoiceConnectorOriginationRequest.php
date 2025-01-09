<?php

namespace Sunaoka\Aws\Structures\Chime\PutVoiceConnectorOrigination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property Shapes\Origination $Origination
 */
class PutVoiceConnectorOriginationRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     Origination: Shapes\Origination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
