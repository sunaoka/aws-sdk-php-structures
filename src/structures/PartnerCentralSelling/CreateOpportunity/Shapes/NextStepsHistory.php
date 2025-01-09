<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Time
 * @property string $Value
 */
class NextStepsHistory extends Shape
{
    /**
     * @param array{
     *     Time: \Aws\Api\DateTimeResult,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
