<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\ListUserAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActiveDirectoryIdentityProvider $ActiveDirectoryIdentityProvider
 */
class IdentityProvider extends Shape
{
    /**
     * @param array{ActiveDirectoryIdentityProvider?: ActiveDirectoryIdentityProvider} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
