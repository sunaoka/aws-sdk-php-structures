<?php

namespace Sunaoka\Aws\Structures\BillingConductor\UpdateBillingTransferPreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property string $ResponsibilityTransferArn
 * @property Shapes\AutoTransferBillingGroupCreationPreference $AutoBillingTransferBillingGroupCreation
 */
class UpdateBillingTransferPreferenceRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     ResponsibilityTransferArn: string,
     *     AutoBillingTransferBillingGroupCreation: Shapes\AutoTransferBillingGroupCreationPreference
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
