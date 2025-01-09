<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetAwsOpportunitySummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $Time
 * @property string $Value
 */
class ProfileNextStepsHistory extends Shape
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
