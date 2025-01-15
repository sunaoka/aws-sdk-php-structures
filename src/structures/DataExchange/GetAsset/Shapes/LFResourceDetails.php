<?php

namespace Sunaoka\Aws\Structures\DataExchange\GetAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DatabaseLFTagPolicy|null $Database
 * @property TableLFTagPolicy|null $Table
 */
class LFResourceDetails extends Shape
{
    /**
     * @param array{
     *     Database?: DatabaseLFTagPolicy|null,
     *     Table?: TableLFTagPolicy|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
