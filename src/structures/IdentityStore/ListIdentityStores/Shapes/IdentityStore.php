<?php

namespace Sunaoka\Aws\Structures\IdentityStore\ListIdentityStores\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $IdentityStoreId
 * @property string $IdentityStoreArn
 */
class IdentityStore extends Shape
{
    /**
     * @param array{
     *     IdentityStoreId: string,
     *     IdentityStoreArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
