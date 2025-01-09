<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DomainName'|'Expiry' $Name
 * @property 'LE'|'GE'|'BEGINS_WITH' $Operator
 * @property list<string> $Values
 */
class FilterCondition extends Shape
{
    /**
     * @param array{
     *     Name: 'DomainName'|'Expiry',
     *     Operator: 'LE'|'GE'|'BEGINS_WITH',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
