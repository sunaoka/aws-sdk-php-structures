<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDistributions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Quantity
 * @property list<string> $Items
 */
class CookieNames extends Shape
{
    /**
     * @param array{
     *     Quantity: int,
     *     Items?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
