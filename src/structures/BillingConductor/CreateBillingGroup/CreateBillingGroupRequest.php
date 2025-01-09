<?php

namespace Sunaoka\Aws\Structures\BillingConductor\CreateBillingGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientToken
 * @property string $Name
 * @property Shapes\AccountGrouping $AccountGrouping
 * @property Shapes\ComputationPreference $ComputationPreference
 * @property string $PrimaryAccountId
 * @property string $Description
 * @property array<string, string> $Tags
 */
class CreateBillingGroupRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string,
     *     Name: string,
     *     AccountGrouping: Shapes\AccountGrouping,
     *     ComputationPreference: Shapes\ComputationPreference,
     *     PrimaryAccountId?: string,
     *     Description?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
