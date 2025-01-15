<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $AfterLastModifiedDate
 * @property \Aws\Api\DateTimeResult|null $BeforeLastModifiedDate
 */
class LastModifiedDate extends Shape
{
    /**
     * @param array{
     *     AfterLastModifiedDate?: \Aws\Api\DateTimeResult|null,
     *     BeforeLastModifiedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
