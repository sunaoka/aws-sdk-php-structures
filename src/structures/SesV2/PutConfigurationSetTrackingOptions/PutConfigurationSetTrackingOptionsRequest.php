<?php

namespace Sunaoka\Aws\Structures\SesV2\PutConfigurationSetTrackingOptions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConfigurationSetName
 * @property string|null $CustomRedirectDomain
 * @property 'REQUIRE'|'REQUIRE_OPEN_ONLY'|'OPTIONAL'|null $HttpsPolicy
 */
class PutConfigurationSetTrackingOptionsRequest extends Request
{
    /**
     * @param array{
     *     ConfigurationSetName: string,
     *     CustomRedirectDomain?: string|null,
     *     HttpsPolicy?: 'REQUIRE'|'REQUIRE_OPEN_ONLY'|'OPTIONAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
