<?php

namespace Sunaoka\Aws\Structures\MailManager\GetRuleSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RECIPIENT'|'MAIL_FROM'|'SENDER'|'FROM'|'TO'|'CC' $Attribute
 * @property list<string> $AddressLists
 */
class RuleIsInAddressList extends Shape
{
    /**
     * @param array{
     *     Attribute: 'RECIPIENT'|'MAIL_FROM'|'SENDER'|'FROM'|'TO'|'CC',
     *     AddressLists: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
