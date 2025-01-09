<?php

namespace Sunaoka\Aws\Structures\MediaPackageVod\DescribePackagingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int $ApproximateAssetCount
 * @property string $Arn
 * @property Shapes\Authorization $Authorization
 * @property string $CreatedAt
 * @property string $DomainName
 * @property Shapes\EgressAccessLogs $EgressAccessLogs
 * @property string $Id
 * @property array<string, string> $Tags
 */
class DescribePackagingGroupResponse extends Response
{
}
