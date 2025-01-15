<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListLicenseServerEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Endpoint
 */
class ServerEndpoint extends Shape
{
    /**
     * @param array{Endpoint?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
