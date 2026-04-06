<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetOrganizationStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $UpdatedAt
 * @property OrganizationStatistics|null $OrganizationStatistics
 */
class OrganizationDetails extends Shape
{
    /**
     * @param array{
     *     UpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     OrganizationStatistics?: OrganizationStatistics|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
