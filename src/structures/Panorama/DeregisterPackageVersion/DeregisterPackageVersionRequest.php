<?php

namespace Sunaoka\Aws\Structures\Panorama\DeregisterPackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OwnerAccount
 * @property string $PackageId
 * @property string $PackageVersion
 * @property string $PatchVersion
 * @property string $UpdatedLatestPatchVersion
 */
class DeregisterPackageVersionRequest extends Request
{
    /**
     * @param array{
     *     OwnerAccount?: string,
     *     PackageId: string,
     *     PackageVersion: string,
     *     PatchVersion: string,
     *     UpdatedLatestPatchVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
