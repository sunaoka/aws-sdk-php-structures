<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $inheritanceObtainedReason
 * @property string|null $parentEntityId
 */
class TaxInheritanceDetails extends Shape
{
    /**
     * @param array{
     *     inheritanceObtainedReason?: string|null,
     *     parentEntityId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
