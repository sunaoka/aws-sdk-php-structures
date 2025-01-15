<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisPermissions;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $AnalysisId
 * @property string|null $AnalysisArn
 * @property list<Shapes\ResourcePermission>|null $Permissions
 * @property int|null $Status
 * @property string|null $RequestId
 */
class DescribeAnalysisPermissionsResponse extends Response
{
}
