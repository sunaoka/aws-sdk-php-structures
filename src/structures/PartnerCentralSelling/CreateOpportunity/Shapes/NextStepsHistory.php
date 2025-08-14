<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\CreateOpportunity\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property \Aws\Api\DateTimeResult $Time
 */
class NextStepsHistory extends Shape
{
    /**
     * @param array{
     *     Value: string,
     *     Time: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
