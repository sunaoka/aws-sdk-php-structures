<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\CmafPackage|null $CmafPackage
 * @property Shapes\DashPackage|null $DashPackage
 * @property Shapes\HlsPackage|null $HlsPackage
 * @property string $Id
 * @property Shapes\MssPackage|null $MssPackage
 * @property string $PackagingGroupId
 * @property array<string, string>|null $Tags
 */
class CreatePackagingConfigurationRequest extends Request
{
    /**
     * @param array{
     *     CmafPackage?: Shapes\CmafPackage|null,
     *     DashPackage?: Shapes\DashPackage|null,
     *     HlsPackage?: Shapes\HlsPackage|null,
     *     Id: string,
     *     MssPackage?: Shapes\MssPackage|null,
     *     PackagingGroupId: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
