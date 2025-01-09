<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysisPermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property string $AnalysisId
 * @property list<Shapes\ResourcePermission> $GrantPermissions
 * @property list<Shapes\ResourcePermission> $RevokePermissions
 */
class UpdateAnalysisPermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     AnalysisId: string,
     *     GrantPermissions?: list<Shapes\ResourcePermission>,
     *     RevokePermissions?: list<Shapes\ResourcePermission>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
