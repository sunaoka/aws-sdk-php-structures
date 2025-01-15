<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\AssociateUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActiveDirectorySettings|null $ActiveDirectorySettings
 * @property 'SELF_MANAGED'|'AWS_MANAGED'|null $ActiveDirectoryType
 * @property string|null $DirectoryId
 */
class ActiveDirectoryIdentityProvider extends Shape
{
    /**
     * @param array{
     *     ActiveDirectorySettings?: ActiveDirectorySettings|null,
     *     ActiveDirectoryType?: 'SELF_MANAGED'|'AWS_MANAGED'|null,
     *     DirectoryId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
