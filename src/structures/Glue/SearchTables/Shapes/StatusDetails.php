<?php

namespace Sunaoka\Aws\Structures\Glue\SearchTables\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Table|null $RequestedChange
 * @property list<ViewValidation>|null $ViewValidations
 */
class StatusDetails extends Shape
{
    /**
     * @param array{
     *     RequestedChange?: Table|null,
     *     ViewValidations?: list<ViewValidation>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
