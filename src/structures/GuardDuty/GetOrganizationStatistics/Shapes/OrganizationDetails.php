<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetOrganizationStatistics\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $UpdatedAt
 * @property OrganizationStatistics $OrganizationStatistics
 */
class OrganizationDetails extends Shape
{
    /**
     * @param array{
     *     UpdatedAt?: \Aws\Api\DateTimeResult,
     *     OrganizationStatistics?: OrganizationStatistics
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
