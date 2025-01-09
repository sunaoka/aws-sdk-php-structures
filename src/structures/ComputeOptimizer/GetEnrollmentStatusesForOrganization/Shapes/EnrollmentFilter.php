<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEnrollmentStatusesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Status' $name
 * @property list<string> $values
 */
class EnrollmentFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'Status',
     *     values?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
