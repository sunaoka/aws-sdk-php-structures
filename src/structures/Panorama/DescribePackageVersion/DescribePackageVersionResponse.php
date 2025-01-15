<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $IsLatestPatch
 * @property string|null $OwnerAccount
 * @property string|null $PackageArn
 * @property string $PackageId
 * @property string $PackageName
 * @property string $PackageVersion
 * @property string $PatchVersion
 * @property \Aws\Api\DateTimeResult|null $RegisteredTime
 * @property 'REGISTER_PENDING'|'REGISTER_COMPLETED'|'FAILED'|'DELETING' $Status
 * @property string|null $StatusDescription
 */
class DescribePackageVersionResponse extends Response
{
}
