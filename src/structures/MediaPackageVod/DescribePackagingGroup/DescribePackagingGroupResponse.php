<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribePackagingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int|null $ApproximateAssetCount
 * @property string|null $Arn
 * @property Shapes\Authorization|null $Authorization
 * @property string|null $CreatedAt
 * @property string|null $DomainName
 * @property Shapes\EgressAccessLogs|null $EgressAccessLogs
 * @property string|null $Id
 * @property array<string, string>|null $Tags
 */
class DescribePackagingGroupResponse extends Response
{
}
