<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\GetConfigurationSetEventDestinations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 */
class GetConfigurationSetEventDestinationsRequest extends Request
{
    /**
     * @param array{ConfigurationSetName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
