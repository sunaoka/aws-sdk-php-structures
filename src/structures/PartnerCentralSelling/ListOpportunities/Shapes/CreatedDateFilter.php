<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $AfterCreatedDate
 * @property \Aws\Api\DateTimeResult|null $BeforeCreatedDate
 */
class CreatedDateFilter extends Shape
{
    /**
     * @param array{
     *     AfterCreatedDate?: \Aws\Api\DateTimeResult|null,
     *     BeforeCreatedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
