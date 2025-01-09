<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowedByOrganizations
 */
class OrganizationsDecisionDetail extends Shape
{
    /**
     * @param array{AllowedByOrganizations?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
