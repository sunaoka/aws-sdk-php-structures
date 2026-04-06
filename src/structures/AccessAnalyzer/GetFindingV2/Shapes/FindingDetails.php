<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetFindingV2\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ExternalAccessDetails|null $externalAccessDetails
 * @property UnusedPermissionDetails|null $unusedPermissionDetails
 * @property UnusedIamUserAccessKeyDetails|null $unusedIamUserAccessKeyDetails
 * @property UnusedIamRoleDetails|null $unusedIamRoleDetails
 * @property UnusedIamUserPasswordDetails|null $unusedIamUserPasswordDetails
 */
class FindingDetails extends Shape
{
    /**
     * @param array{
     *     externalAccessDetails?: ExternalAccessDetails|null,
     *     unusedPermissionDetails?: UnusedPermissionDetails|null,
     *     unusedIamUserAccessKeyDetails?: UnusedIamUserAccessKeyDetails|null,
     *     unusedIamRoleDetails?: UnusedIamRoleDetails|null,
     *     unusedIamUserPasswordDetails?: UnusedIamUserPasswordDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
