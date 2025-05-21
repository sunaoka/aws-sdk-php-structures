<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetProvisioningProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class GetProvisioningProfileRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
