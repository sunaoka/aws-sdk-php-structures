<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutConfigurationSetTrackingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property string $CustomRedirectDomain
 */
class PutConfigurationSetTrackingOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     CustomRedirectDomain?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
