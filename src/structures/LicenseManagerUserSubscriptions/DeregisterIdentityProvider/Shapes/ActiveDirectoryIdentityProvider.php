<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\DeregisterIdentityProvider\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryId
 * @property ActiveDirectorySettings|null $ActiveDirectorySettings
 * @property 'SELF_MANAGED'|'AWS_MANAGED'|null $ActiveDirectoryType
 * @property bool|null $IsSharedActiveDirectory
 */
class ActiveDirectoryIdentityProvider extends Shape
{
    /**
     * @param array{
     *     DirectoryId?: string|null,
     *     ActiveDirectorySettings?: ActiveDirectorySettings|null,
     *     ActiveDirectoryType?: 'SELF_MANAGED'|'AWS_MANAGED'|null,
     *     IsSharedActiveDirectory?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
