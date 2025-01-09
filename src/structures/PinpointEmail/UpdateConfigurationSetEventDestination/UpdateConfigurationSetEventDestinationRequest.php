<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\UpdateConfigurationSetEventDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property string $EventDestinationName
 * @property Shapes\EventDestinationDefinition $EventDestination
 */
class UpdateConfigurationSetEventDestinationRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     EventDestinationName: string,
     *     EventDestination: Shapes\EventDestinationDefinition
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
