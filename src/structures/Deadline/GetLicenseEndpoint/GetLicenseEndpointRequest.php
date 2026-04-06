<?php

namespace Sunaoka\Aws\Structures\Deadline\GetLicenseEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $licenseEndpointId
 */
class GetLicenseEndpointRequest extends Request
{
    /**
     * @param array{licenseEndpointId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
