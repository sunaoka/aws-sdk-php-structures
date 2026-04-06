<?php

namespace Sunaoka\Aws\Structures\Connect\SearchEmailAddresses\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EmailAddressSearchCriteria>|null $OrConditions
 * @property list<EmailAddressSearchCriteria>|null $AndConditions
 * @property StringCondition|null $StringCondition
 */
class EmailAddressSearchCriteria extends Shape
{
    /**
     * @param array{
     *     OrConditions?: list<EmailAddressSearchCriteria>|null,
     *     AndConditions?: list<EmailAddressSearchCriteria>|null,
     *     StringCondition?: StringCondition|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
