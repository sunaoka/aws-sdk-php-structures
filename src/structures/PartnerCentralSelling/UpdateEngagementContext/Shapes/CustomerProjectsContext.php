<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\UpdateEngagementContext\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EngagementCustomer|null $Customer
 * @property EngagementCustomerProjectDetails|null $Project
 */
class CustomerProjectsContext extends Shape
{
    /**
     * @param array{
     *     Customer?: EngagementCustomer|null,
     *     Project?: EngagementCustomerProjectDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
