<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Arn
 * @property Shapes\CmafPackage|null $CmafPackage
 * @property string|null $CreatedAt
 * @property Shapes\DashPackage|null $DashPackage
 * @property Shapes\HlsPackage|null $HlsPackage
 * @property string|null $Id
 * @property Shapes\MssPackage|null $MssPackage
 * @property string|null $PackagingGroupId
 * @property array<string, string>|null $Tags
 */
class CreatePackagingConfigurationResponse extends Response
{
}
