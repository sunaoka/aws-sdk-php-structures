<?php

namespace Sunaoka\Aws\Structures\IoTFleetWise\GetCampaign\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $timestreamTableArn
 * @property string $executionRoleArn
 */
class TimestreamConfig extends Shape
{
    /**
     * @param array{
     *     timestreamTableArn: string,
     *     executionRoleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
