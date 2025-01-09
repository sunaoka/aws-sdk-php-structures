<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalAccessDetails $externalAccessDetails
 * @property UnusedPermissionDetails $unusedPermissionDetails
 * @property UnusedIamUserAccessKeyDetails $unusedIamUserAccessKeyDetails
 * @property UnusedIamRoleDetails $unusedIamRoleDetails
 * @property UnusedIamUserPasswordDetails $unusedIamUserPasswordDetails
 */
class FindingDetails extends Shape
{
    /**
     * @param array{
     *     externalAccessDetails?: ExternalAccessDetails,
     *     unusedPermissionDetails?: UnusedPermissionDetails,
     *     unusedIamUserAccessKeyDetails?: UnusedIamUserAccessKeyDetails,
     *     unusedIamRoleDetails?: UnusedIamRoleDetails,
     *     unusedIamUserPasswordDetails?: UnusedIamUserPasswordDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
