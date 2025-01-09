<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEmailAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EmailAddressSearchCriteria> $OrConditions
 * @property list<EmailAddressSearchCriteria> $AndConditions
 * @property StringCondition $StringCondition
 */
class EmailAddressSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<EmailAddressSearchCriteria>,
     *     AndConditions?: list<EmailAddressSearchCriteria>,
     *     StringCondition?: StringCondition
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
