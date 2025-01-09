<?php

namespace Sunaoka\Aws\Structures\Deadline\PutMeteredProduct;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $licenseEndpointId
 * @property string $productId
 */
class PutMeteredProductRequest extends Request
{
    /**
     * @param array{
     *     licenseEndpointId: string,
     *     productId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
