<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\ListPackagingConfigurations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Arn
 * @property CmafPackage $CmafPackage
 * @property string $CreatedAt
 * @property DashPackage $DashPackage
 * @property HlsPackage $HlsPackage
 * @property string $Id
 * @property MssPackage $MssPackage
 * @property string $PackagingGroupId
 * @property array<string, string> $Tags
 */
class PackagingConfiguration extends Shape
{
    /**
     * @param array{
     *     Arn?: string,
     *     CmafPackage?: CmafPackage,
     *     CreatedAt?: string,
     *     DashPackage?: DashPackage,
     *     HlsPackage?: HlsPackage,
     *     Id?: string,
     *     MssPackage?: MssPackage,
     *     PackagingGroupId?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
