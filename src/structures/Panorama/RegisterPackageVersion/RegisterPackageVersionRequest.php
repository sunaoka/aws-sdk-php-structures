<?php

namespace Sunaoka\Aws\Structures\Panorama\RegisterPackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property bool $MarkLatest
 * @property string $OwnerAccount
 * @property string $PackageId
 * @property string $PackageVersion
 * @property string $PatchVersion
 */
class RegisterPackageVersionRequest extends Request
{
    /**
     * @param array{
     *     MarkLatest?: bool,
     *     OwnerAccount?: string,
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
