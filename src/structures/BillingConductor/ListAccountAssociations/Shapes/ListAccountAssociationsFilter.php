<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListAccountAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Association
 * @property string|null $AccountId
 * @property list<string>|null $AccountIds
 */
class ListAccountAssociationsFilter extends Shape
{
    /**
     * @param array{
     *     Association?: string|null,
     *     AccountId?: string|null,
     *     AccountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
