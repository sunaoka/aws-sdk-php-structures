<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateResourcePermissions;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AwsAccountId
 * @property 'QUICKSIGHT_MANAGED'|'CUSTOMER_MANAGED' $RoleType
 * @property string $CustomerManagedRoleArn
 */
class UpdateResourcePermissionsRequest extends Request
{
    /**
     * @param array{
     *     AwsAccountId: string,
     *     RoleType: 'QUICKSIGHT_MANAGED'|'CUSTOMER_MANAGED',
     *     CustomerManagedRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
