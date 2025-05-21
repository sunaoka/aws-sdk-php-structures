<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\DeleteProvisioningProfile;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Identifier
 */
class DeleteProvisioningProfileRequest extends Request
{
    /**
     * @param array{Identifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
