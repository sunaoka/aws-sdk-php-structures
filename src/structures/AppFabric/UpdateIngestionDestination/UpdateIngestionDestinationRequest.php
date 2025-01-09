<?php

namespace Sunaoka\Aws\Structures\AppFabric\UpdateIngestionDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $ingestionIdentifier
 * @property string $ingestionDestinationIdentifier
 * @property Shapes\DestinationConfiguration $destinationConfiguration
 */
class UpdateIngestionDestinationRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     ingestionIdentifier: string,
     *     ingestionDestinationIdentifier: string,
     *     destinationConfiguration: Shapes\DestinationConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
