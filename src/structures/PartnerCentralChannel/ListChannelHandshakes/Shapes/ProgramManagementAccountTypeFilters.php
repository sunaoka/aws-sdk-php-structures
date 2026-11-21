<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelHandshakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'|'MANAGED_SERVICES_PROVIDER'>|null $programs
 */
class ProgramManagementAccountTypeFilters extends Shape
{
    /**
     * @param array{programs?: list<'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'|'MANAGED_SERVICES_PROVIDER'>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
