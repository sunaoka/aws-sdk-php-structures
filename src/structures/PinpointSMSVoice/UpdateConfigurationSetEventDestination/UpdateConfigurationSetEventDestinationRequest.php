<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoice\UpdateConfigurationSetEventDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\EventDestinationDefinition|null $EventDestination
 * @property string $EventDestinationName
 */
class UpdateConfigurationSetEventDestinationRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     EventDestination?: Shapes\EventDestinationDefinition|null,
     *     EventDestinationName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
