<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\CreateLicenseServerEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $IdentityProviderArn
 * @property Shapes\LicenseServerSettings $LicenseServerSettings
 * @property array<string, string> $Tags
 */
class CreateLicenseServerEndpointRequest extends Request
{
    /**
     * @param array{
     *     IdentityProviderArn: string,
     *     LicenseServerSettings: Shapes\LicenseServerSettings,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
