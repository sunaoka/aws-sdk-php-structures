<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListCustomerAccountBulkJobs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Identifier
 * @property 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null $Status
 */
class CustomerAccountBulkJobFilter extends Shape
{
    /**
     * @param array{
     *     Identifier?: string|null,
     *     Status?: 'SUBMITTED'|'IN_PROGRESS'|'COMPLETED'|'FAILED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
