<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\CreateConfigurationSetEventDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\EventDestinationDefinition $EventDestination
 * @property string $EventDestinationName
 */
class CreateConfigurationSetEventDestinationRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     EventDestination?: Shapes\EventDestinationDefinition,
     *     EventDestinationName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
