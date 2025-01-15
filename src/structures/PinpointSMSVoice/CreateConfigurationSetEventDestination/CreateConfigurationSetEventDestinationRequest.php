<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\CreateConfigurationSetEventDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\EventDestinationDefinition|null $EventDestination
 * @property string|null $EventDestinationName
 */
class CreateConfigurationSetEventDestinationRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     EventDestination?: Shapes\EventDestinationDefinition|null,
     *     EventDestinationName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
