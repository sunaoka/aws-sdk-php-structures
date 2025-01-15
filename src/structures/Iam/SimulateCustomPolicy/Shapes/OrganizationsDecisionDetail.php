<?php

namespace Sunaoka\Aws\Structures\Iam\SimulateCustomPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowedByOrganizations
 */
class OrganizationsDecisionDetail extends Shape
{
    /**
     * @param array{AllowedByOrganizations?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
