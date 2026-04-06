<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListChannelHandshakes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'|null $program
 */
class ProgramManagementAccountHandshakeDetail extends Shape
{
    /**
     * @param array{program?: 'SOLUTION_PROVIDER'|'DISTRIBUTION'|'DISTRIBUTION_SELLER'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
