<?php

namespace Sunaoka\Aws\Structures\Acm\SearchCertificates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property 'CONTAINS'|'EQUALS' $ComparisonOperator
 */
class DnsNameFilter extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     ComparisonOperator: 'CONTAINS'|'EQUALS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
