<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizer\GetEnrollmentStatusesForOrganization\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Status'|null $name
 * @property list<string>|null $values
 */
class EnrollmentFilter extends Shape
{
    /**
     * @param array{
     *     name?: 'Status'|null,
     *     values?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
