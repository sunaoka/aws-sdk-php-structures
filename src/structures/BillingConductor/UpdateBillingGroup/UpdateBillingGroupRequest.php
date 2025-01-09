<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string $Name
 * @property 'ACTIVE'|'PRIMARY_ACCOUNT_MISSING' $Status
 * @property Shapes\ComputationPreference $ComputationPreference
 * @property string $Description
 * @property Shapes\UpdateBillingGroupAccountGrouping $AccountGrouping
 */
class UpdateBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string,
     *     Status?: 'ACTIVE'|'PRIMARY_ACCOUNT_MISSING',
     *     ComputationPreference?: Shapes\ComputationPreference,
     *     Description?: string,
     *     AccountGrouping?: Shapes\UpdateBillingGroupAccountGrouping
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
