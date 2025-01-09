<?php

namespace Sunaoka\Aws\Structures\Glue\GetTableVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Table $RequestedChange
 * @property list<ViewValidation> $ViewValidations
 */
class StatusDetails extends Shape
{
    /**
     * @param array{
     *     RequestedChange?: Table,
     *     ViewValidations?: list<ViewValidation>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
