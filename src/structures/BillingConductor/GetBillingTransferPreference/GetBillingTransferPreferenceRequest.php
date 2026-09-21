<?php

namespace Sunaoka\Aws\Structures\BillingConductor\GetBillingTransferPreference;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResponsibilityTransferArn
 */
class GetBillingTransferPreferenceRequest extends Request
{
    /**
     * @param array{ResponsibilityTransferArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
