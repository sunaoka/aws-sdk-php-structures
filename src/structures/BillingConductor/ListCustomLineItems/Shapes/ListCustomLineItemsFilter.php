<?php

namespace Sunaoka\Aws\Structures\BillingConductor\ListCustomLineItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Names
 * @property list<string> $BillingGroups
 * @property list<string> $Arns
 * @property list<string> $AccountIds
 */
class ListCustomLineItemsFilter extends Shape
{
    /**
     * @param array{
     *     Names?: list<string>,
     *     BillingGroups?: list<string>,
     *     Arns?: list<string>,
     *     AccountIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
