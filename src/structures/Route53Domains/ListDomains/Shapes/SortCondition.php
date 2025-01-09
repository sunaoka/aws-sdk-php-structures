<?php

namespace Sunaoka\Aws\Structures\Route53Domains\ListDomains\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DomainName'|'Expiry' $Name
 * @property 'ASC'|'DESC' $SortOrder
 */
class SortCondition extends Shape
{
    /**
     * @param array{
     *     Name: 'DomainName'|'Expiry',
     *     SortOrder: 'ASC'|'DESC'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
