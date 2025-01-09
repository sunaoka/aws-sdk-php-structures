<?php

namespace Sunaoka\Aws\Structures\DataExchange\UpdateAsset\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DatabaseLFTagPolicy $Database
 * @property TableLFTagPolicy $Table
 */
class LFResourceDetails extends Shape
{
    /**
     * @param array{
     *     Database?: DatabaseLFTagPolicy,
     *     Table?: TableLFTagPolicy
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
