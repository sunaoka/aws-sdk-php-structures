<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetProductSharingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 */
class GetProductSharingPolicyRequest extends Request
{
    /**
     * @param array{productId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
