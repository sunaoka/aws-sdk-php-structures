<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetTrackingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property string $CustomRedirectDomain
 * @property 'REQUIRE'|'REQUIRE_OPEN_ONLY'|'OPTIONAL' $HttpsPolicy
 */
class PutConfigurationSetTrackingOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     CustomRedirectDomain?: string,
     *     HttpsPolicy?: 'REQUIRE'|'REQUIRE_OPEN_ONLY'|'OPTIONAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
