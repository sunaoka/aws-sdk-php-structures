<?php

namespace Sunaoka\Aws\Structures\TaxSettings\ListTaxRegistrations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $inheritanceObtainedReason
 * @property string $parentEntityId
 */
class TaxInheritanceDetails extends Shape
{
    /**
     * @param array{
     *     inheritanceObtainedReason?: string,
     *     parentEntityId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
