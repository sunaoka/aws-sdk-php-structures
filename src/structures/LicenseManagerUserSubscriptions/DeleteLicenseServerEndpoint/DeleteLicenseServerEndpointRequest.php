<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DeleteLicenseServerEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LicenseServerEndpointArn
 * @property 'RDS_SAL' $ServerType
 */
class DeleteLicenseServerEndpointRequest extends Request
{
    /**
     * @param array{
     *     LicenseServerEndpointArn: string,
     *     ServerType: 'RDS_SAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
