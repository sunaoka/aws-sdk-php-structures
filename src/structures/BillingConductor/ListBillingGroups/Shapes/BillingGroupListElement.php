<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $Description
 * @property string|null $PrimaryAccountId
 * @property ComputationPreference|null $ComputationPreference
 * @property int<0, max>|null $Size
 * @property int|null $CreationTime
 * @property int|null $LastModifiedTime
 * @property 'ACTIVE'|'PRIMARY_ACCOUNT_MISSING'|null $Status
 * @property string|null $StatusReason
 * @property ListBillingGroupAccountGrouping|null $AccountGrouping
 */
class BillingGroupListElement extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Arn?: string|null,
     *     Description?: string|null,
     *     PrimaryAccountId?: string|null,
     *     ComputationPreference?: ComputationPreference|null,
     *     Size?: int<0, max>|null,
     *     CreationTime?: int|null,
     *     LastModifiedTime?: int|null,
     *     Status?: 'ACTIVE'|'PRIMARY_ACCOUNT_MISSING'|null,
     *     StatusReason?: string|null,
     *     AccountGrouping?: ListBillingGroupAccountGrouping|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
