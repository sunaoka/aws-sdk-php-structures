<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateVoiceConnector;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $VoiceConnectorId
 * @property string $Name
 * @property bool $RequireEncryption
 */
class UpdateVoiceConnectorRequest extends Request
{
    /**
     * @param array{
     *     VoiceConnectorId: string,
     *     Name: string,
     *     RequireEncryption: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
