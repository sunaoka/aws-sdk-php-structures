<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeleteEventDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property string $EventDestinationName
 */
class DeleteEventDestinationRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     EventDestinationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
