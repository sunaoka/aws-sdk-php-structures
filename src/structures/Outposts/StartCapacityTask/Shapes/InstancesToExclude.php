<?php

namespace Sunaoka\Aws\Structures\Outposts\StartCapacityTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Instances
 * @property list<string>|null $AccountIds
 * @property list<'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'>|null $Services
 */
class InstancesToExclude extends Shape
{
    /**
     * @param array{
     *     Instances?: list<string>|null,
     *     AccountIds?: list<string>|null,
     *     Services?: list<'AWS'|'EC2'|'ELASTICACHE'|'ELB'|'RDS'|'ROUTE53'>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
