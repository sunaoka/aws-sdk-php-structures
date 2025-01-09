<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListAccountAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Association
 * @property string $AccountId
 * @property list<string> $AccountIds
 */
class ListAccountAssociationsFilter extends Shape
{
    /**
     * @param array{
     *     Association?: string,
     *     AccountId?: string,
     *     AccountIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
