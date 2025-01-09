<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CmafPackage $CmafPackage
 * @property Shapes\DashPackage $DashPackage
 * @property Shapes\HlsPackage $HlsPackage
 * @property string $Id
 * @property Shapes\MssPackage $MssPackage
 * @property string $PackagingGroupId
 * @property array<string, string> $Tags
 */
class CreatePackagingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     CmafPackage?: Shapes\CmafPackage,
     *     DashPackage?: Shapes\DashPackage,
     *     HlsPackage?: Shapes\HlsPackage,
     *     Id: string,
     *     MssPackage?: Shapes\MssPackage,
     *     PackagingGroupId: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
