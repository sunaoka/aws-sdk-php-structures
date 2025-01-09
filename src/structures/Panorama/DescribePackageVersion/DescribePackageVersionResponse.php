<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackageVersion;

use Sunaoka\Aws\Structures\Response;

/**
 * @property bool $IsLatestPatch
 * @property string $OwnerAccount
 * @property string $PackageArn
 * @property string $PackageId
 * @property string $PackageName
 * @property string $PackageVersion
 * @property string $PatchVersion
 * @property \Aws\Api\DateTimeResult $RegisteredTime
 * @property 'REGISTER_PENDING'|'REGISTER_COMPLETED'|'FAILED'|'DELETING' $Status
 * @property string $StatusDescription
 */
class DescribePackageVersionResponse extends Response
{
}
