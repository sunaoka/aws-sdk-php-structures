<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetAlias\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AliasName
 * @property string|null $KeyArn
 */
class Alias extends Shape
{
    /**
     * @param array{
     *     AliasName: string,
     *     KeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
