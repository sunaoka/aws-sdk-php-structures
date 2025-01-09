<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\ListAliases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AliasName
 * @property string $KeyArn
 */
class Alias extends Shape
{
    /**
     * @param array{
     *     AliasName: string,
     *     KeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
