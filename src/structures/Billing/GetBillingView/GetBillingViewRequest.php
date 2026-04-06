<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingView;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 */
class GetBillingViewRequest extends Request
{
    /**
     * @param array{arn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
