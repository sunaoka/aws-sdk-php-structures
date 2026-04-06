<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Arn
 * @property string|null $Name
 * @property 'ACTIVE'|'PRIMARY_ACCOUNT_MISSING'|null $Status
 * @property Shapes\ComputationPreference|null $ComputationPreference
 * @property string|null $Description
 * @property Shapes\UpdateBillingGroupAccountGrouping|null $AccountGrouping
 */
class UpdateBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     Arn: string,
     *     Name?: string|null,
     *     Status?: 'ACTIVE'|'PRIMARY_ACCOUNT_MISSING'|null,
     *     ComputationPreference?: Shapes\ComputationPreference|null,
     *     Description?: string|null,
     *     AccountGrouping?: Shapes\UpdateBillingGroupAccountGrouping|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
