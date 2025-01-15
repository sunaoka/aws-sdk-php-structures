<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\PutConfigurationSetTrackingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property string|null $CustomRedirectDomain
 */
class PutConfigurationSetTrackingOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     CustomRedirectDomain?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
