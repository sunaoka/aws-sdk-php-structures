<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\ListOpportunities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $AfterLastModifiedDate
 * @property \Aws\Api\DateTimeResult $BeforeLastModifiedDate
 */
class LastModifiedDate extends Shape
{
    /**
     * @param array{
     *     AfterLastModifiedDate?: \Aws\Api\DateTimeResult,
     *     BeforeLastModifiedDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
