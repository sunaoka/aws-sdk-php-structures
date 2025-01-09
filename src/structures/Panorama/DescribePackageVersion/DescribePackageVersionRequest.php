<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageVersion;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OwnerAccount
 * @property string $PackageId
 * @property string $PackageVersion
 * @property string $PatchVersion
 */
class DescribePackageVersionRequest extends Request
{
    /**
     * @param array{
     *     OwnerAccount?: string,
     *     PackageId: string,
     *     PackageVersion: string,
     *     PatchVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
