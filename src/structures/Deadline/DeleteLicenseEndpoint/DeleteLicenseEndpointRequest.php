<?php

namespace Sunaoka\Aws\Structures\Deadline\DeleteLicenseEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $licenseEndpointId
 */
class DeleteLicenseEndpointRequest extends Request
{
    /**
     * @param array{licenseEndpointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
