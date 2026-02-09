<?php

namespace Sunaoka\Aws\Structures\PartnerCentralSelling\GetResourceSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Value
 * @property \Aws\Api\DateTimeResult $Time
 */
class ProfileNextStepsHistory extends Shape
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
