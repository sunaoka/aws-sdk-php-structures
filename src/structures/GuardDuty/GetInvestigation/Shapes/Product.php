<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetInvestigation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string|null $Feature
 */
class Product extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Feature?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
