<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AfterTargetCloseDate
 * @property string|null $BeforeTargetCloseDate
 */
class TargetCloseDateFilter extends Shape
{
    /**
     * @param array{
     *     AfterTargetCloseDate?: string|null,
     *     BeforeTargetCloseDate?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
