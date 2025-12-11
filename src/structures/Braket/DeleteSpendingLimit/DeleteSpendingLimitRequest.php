<?php

namespace Sunaoka\Aws\Structures\Braket\DeleteSpendingLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $spendingLimitArn
 */
class DeleteSpendingLimitRequest extends Request
{
    /**
     * @param array{spendingLimitArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
