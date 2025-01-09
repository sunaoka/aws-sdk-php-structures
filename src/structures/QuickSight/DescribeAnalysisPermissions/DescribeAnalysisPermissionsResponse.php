<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $AnalysisId
 * @property string $AnalysisArn
 * @property list<Shapes\ResourcePermission> $Permissions
 * @property int $Status
 * @property string $RequestId
 */
class DescribeAnalysisPermissionsResponse extends Response
{
}
