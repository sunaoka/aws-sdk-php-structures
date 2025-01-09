<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateConfigurationSetEventDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property string $EventDestinationName
 * @property Shapes\EventDestinationDefinition $EventDestination
 */
class CreateConfigurationSetEventDestinationRequest extends Request
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
