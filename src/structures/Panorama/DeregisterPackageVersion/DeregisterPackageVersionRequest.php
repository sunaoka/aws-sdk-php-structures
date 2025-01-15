<?php

namespace Sunaoka\Aws\Structures\Panorama\DeregisterPackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OwnerAccount
 * @property string $PackageId
 * @property string $PackageVersion
 * @property string $PatchVersion
 * @property string|null $UpdatedLatestPatchVersion
 */
class DeregisterPackageVersionRequest extends Request
{
    /**
     * @param array{
     *     OwnerAccount?: string|null,
     *     PackageId: string,
     *     PackageVersion: string,
     *     PatchVersion: string,
     *     UpdatedLatestPatchVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
