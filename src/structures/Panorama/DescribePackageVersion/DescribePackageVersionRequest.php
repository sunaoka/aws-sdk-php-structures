<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $OwnerAccount
 * @property string $PackageId
 * @property string $PackageVersion
 * @property string|null $PatchVersion
 */
class DescribePackageVersionRequest extends Request
{
    /**
     * @param array{
     *     OwnerAccount?: string|null,
     *     PackageId: string,
     *     PackageVersion: string,
     *     PatchVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
