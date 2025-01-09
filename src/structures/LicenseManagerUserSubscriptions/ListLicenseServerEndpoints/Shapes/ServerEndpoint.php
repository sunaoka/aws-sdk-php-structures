<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListLicenseServerEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Endpoint
 */
class ServerEndpoint extends Shape
{
    /**
     * @param array{Endpoint?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
