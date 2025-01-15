<?php

namespace Sunaoka\Aws\Structures\Panorama\DescribePackage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property \Aws\Api\DateTimeResult $CreatedTime
 * @property string $PackageId
 * @property string $PackageName
 * @property list<string>|null $ReadAccessPrincipalArns
 * @property Shapes\StorageLocation $StorageLocation
 * @property array<string, string> $Tags
 * @property list<string>|null $WriteAccessPrincipalArns
 */
class DescribePackageResponse extends Response
{
}
