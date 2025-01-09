<?php

namespace Sunaoka\Aws\Structures\LicenseManagerUserSubscriptions\StopProductSubscription\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ActiveDirectorySettings $ActiveDirectorySettings
 * @property 'SELF_MANAGED'|'AWS_MANAGED' $ActiveDirectoryType
 * @property string $DirectoryId
 */
class ActiveDirectoryIdentityProvider extends Shape
{
    /**
     * @param array{
     *     ActiveDirectorySettings?: ActiveDirectorySettings,
     *     ActiveDirectoryType?: 'SELF_MANAGED'|'AWS_MANAGED',
     *     DirectoryId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
