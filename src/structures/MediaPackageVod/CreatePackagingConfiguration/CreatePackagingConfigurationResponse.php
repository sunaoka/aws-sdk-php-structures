<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\CreatePackagingConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property Shapes\CmafPackage $CmafPackage
 * @property string $CreatedAt
 * @property Shapes\DashPackage $DashPackage
 * @property Shapes\HlsPackage $HlsPackage
 * @property string $Id
 * @property Shapes\MssPackage $MssPackage
 * @property string $PackagingGroupId
 * @property array<string, string> $Tags
 */
class CreatePackagingConfigurationResponse extends Response
{
}
