<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property CmafPackage|null $CmafPackage
 * @property string|null $CreatedAt
 * @property DashPackage|null $DashPackage
 * @property HlsPackage|null $HlsPackage
 * @property string|null $Id
 * @property MssPackage|null $MssPackage
 * @property string|null $PackagingGroupId
 * @property array<string, string>|null $Tags
 */
class PackagingConfiguration extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     CmafPackage?: CmafPackage|null,
     *     CreatedAt?: string|null,
     *     DashPackage?: DashPackage|null,
     *     HlsPackage?: HlsPackage|null,
     *     Id?: string|null,
     *     MssPackage?: MssPackage|null,
     *     PackagingGroupId?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
