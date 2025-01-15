<?php

namespace Sunaoka\Aws\Structures\Panorama\RegisterPackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool|null $MarkLatest
 * @property string|null $OwnerAccount
 * @property string $PackageId
 * @property string $PackageVersion
 * @property string $PatchVersion
 */
class RegisterPackageVersionRequest extends Request
{
    /**
     * @param array{
     *     MarkLatest?: bool|null,
     *     OwnerAccount?: string|null,
     *     PackageId: string,
     *     PackageVersion: string,
     *     PatchVersion: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
