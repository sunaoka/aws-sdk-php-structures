<?php

namespace Sunaoka\Aws\Structures\Ses\UpdateConfigurationSetEventDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property Shapes\EventDestination $EventDestination
 */
class UpdateConfigurationSetEventDestinationRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     EventDestination: Shapes\EventDestination
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
