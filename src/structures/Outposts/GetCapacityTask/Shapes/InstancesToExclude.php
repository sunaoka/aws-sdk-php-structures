<?php

namespace Sunaoka\Aws\Structures\Outposts\GetCapacityTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Instances
 * @property list<string> $AccountIds
 * @property list<'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'> $Services
 */
class InstancesToExclude extends Shape
{
    /**
     * @param array{
     *     Instances?: list<string>,
     *     AccountIds?: list<string>,
     *     Services?: list<'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
