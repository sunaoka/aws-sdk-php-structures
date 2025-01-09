<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeScheduledActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'cluster-identifier'|'iam-role' $Name
 * @property list<string> $Values
 */
class ScheduledActionFilter extends Shape
{
    /**
     * @param array{
     *     Name: 'cluster-identifier'|'iam-role',
     *     Values: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
