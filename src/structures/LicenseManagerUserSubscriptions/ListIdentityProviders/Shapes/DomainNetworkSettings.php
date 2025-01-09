<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListIdentityProviders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Subnets
 */
class DomainNetworkSettings extends Shape
{
    /**
     * @param array{Subnets: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
