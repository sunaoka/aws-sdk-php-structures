<?php

namespace Sunaoka\Aws\Structures\MailManager\UpdateRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $AddressLists
 * @property 'RECIPIENT'|'MAIL_FROM'|'SENDER'|'FROM'|'TO'|'CC' $Attribute
 */
class RuleIsInAddressList extends Shape
{
    /**
     * @param array{
     *     AddressLists: list<string>,
     *     Attribute: 'RECIPIENT'|'MAIL_FROM'|'SENDER'|'FROM'|'TO'|'CC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
