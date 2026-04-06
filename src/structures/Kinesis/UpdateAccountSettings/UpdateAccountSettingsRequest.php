<?php

namespace Sunaoka\Aws\Structures\Kinesis\UpdateAccountSettings;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\MinimumThroughputBillingCommitmentInput $MinimumThroughputBillingCommitment
 */
class UpdateAccountSettingsRequest extends Request
{
    /**
     * @param array{MinimumThroughputBillingCommitment: Shapes\MinimumThroughputBillingCommitmentInput} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
