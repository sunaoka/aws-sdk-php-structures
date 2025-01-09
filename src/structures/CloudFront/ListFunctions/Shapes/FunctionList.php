<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListFunctions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $NextMarker
 * @property int $MaxItems
 * @property int $Quantity
 * @property list<FunctionSummary> $Items
 */
class FunctionList extends Shape
{
    /**
     * @param array{
     *     NextMarker?: string,
     *     MaxItems: int,
     *     Quantity: int,
     *     Items?: list<FunctionSummary>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
