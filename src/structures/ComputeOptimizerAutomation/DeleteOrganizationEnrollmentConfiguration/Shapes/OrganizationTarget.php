<?php

namespace Sunaoka\Aws\Structures\ComputeOptimizerAutomation\DeleteOrganizationEnrollmentConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $accountId
 * @property string|null $organizationalUnitId
 */
class OrganizationTarget extends Shape
{
    /**
     * @param array{
     *     accountId?: string|null,
     *     organizationalUnitId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
