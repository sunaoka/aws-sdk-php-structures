<?php

namespace Sunaoka\Aws\Structures\Billing\DeleteBillingView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class DeleteBillingViewRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
