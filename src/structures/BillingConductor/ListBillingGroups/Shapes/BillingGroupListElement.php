<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListBillingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Arn
 * @property string $Description
 * @property string $PrimaryAccountId
 * @property ComputationPreference $ComputationPreference
 * @property int<0, max> $Size
 * @property int $CreationTime
 * @property int $LastModifiedTime
 * @property 'ACTIVE'|'PRIMARY_ACCOUNT_MISSING' $Status
 * @property string $StatusReason
 * @property ListBillingGroupAccountGrouping $AccountGrouping
 */
class BillingGroupListElement extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Arn?: string,
     *     Description?: string,
     *     PrimaryAccountId?: string,
     *     ComputationPreference?: ComputationPreference,
     *     Size?: int<0, max>,
     *     CreationTime?: int,
     *     LastModifiedTime?: int,
     *     Status?: 'ACTIVE'|'PRIMARY_ACCOUNT_MISSING',
     *     StatusReason?: string,
     *     AccountGrouping?: ListBillingGroupAccountGrouping
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
