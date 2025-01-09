<?php

namespace Sunaoka\Aws\Structures\AppFabric\GetIngestionDestination;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $appBundleIdentifier
 * @property string $ingestionIdentifier
 * @property string $ingestionDestinationIdentifier
 */
class GetIngestionDestinationRequest extends Request
{
    /**
     * @param array{
     *     appBundleIdentifier: string,
     *     ingestionIdentifier: string,
     *     ingestionDestinationIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
