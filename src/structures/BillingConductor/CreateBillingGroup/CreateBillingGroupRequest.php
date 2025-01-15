<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $Name
 * @property Shapes\AccountGrouping $AccountGrouping
 * @property Shapes\ComputationPreference $ComputationPreference
 * @property string|null $PrimaryAccountId
 * @property string|null $Description
 * @property array<string, string>|null $Tags
 */
class CreateBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     Name: string,
     *     AccountGrouping: Shapes\AccountGrouping,
     *     ComputationPreference: Shapes\ComputationPreference,
     *     PrimaryAccountId?: string|null,
     *     Description?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
