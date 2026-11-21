<?php

namespace Sunaoka\Aws\Structures\APIPortal\DeleteProductSharingPolicy;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $productId
 */
class DeleteProductSharingPolicyRequest extends Request
{
    /**
     * @param array{productId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
