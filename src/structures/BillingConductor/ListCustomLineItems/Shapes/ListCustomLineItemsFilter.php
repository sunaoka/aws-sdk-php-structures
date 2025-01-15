<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Names
 * @property list<string>|null $BillingGroups
 * @property list<string>|null $Arns
 * @property list<string>|null $AccountIds
 */
class ListCustomLineItemsFilter extends Shape
{
    /**
     * @param array{
     *     Names?: list<string>|null,
     *     BillingGroups?: list<string>|null,
     *     Arns?: list<string>|null,
     *     AccountIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
