<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StartProductSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActiveDirectoryIdentityProvider|null $ActiveDirectoryIdentityProvider
 */
class IdentityProvider extends Shape
{
    /**
     * @param array{ActiveDirectoryIdentityProvider?: ActiveDirectoryIdentityProvider|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
