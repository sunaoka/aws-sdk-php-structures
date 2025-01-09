<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateEngagement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property EngagementCustomer $Customer
 * @property EngagementCustomerProjectDetails $Project
 */
class CustomerProjectsContext extends Shape
{
    /**
     * @param array{
     *     Customer?: EngagementCustomer,
     *     Project?: EngagementCustomerProjectDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
