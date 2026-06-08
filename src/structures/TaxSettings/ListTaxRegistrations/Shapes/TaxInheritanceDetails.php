<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $parentEntityId
 * @property string|null $inheritanceObtainedReason
 */
class TaxInheritanceDetails extends Shape
{
    /**
     * @param array{
     *     parentEntityId?: string|null,
     *     inheritanceObtainedReason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
