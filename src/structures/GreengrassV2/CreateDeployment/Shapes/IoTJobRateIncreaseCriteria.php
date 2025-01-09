<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max> $numberOfNotifiedThings
 * @property int<1, max> $numberOfSucceededThings
 */
class IoTJobRateIncreaseCriteria extends Shape
{
    /**
     * @param array{
     *     numberOfNotifiedThings?: int<1, max>,
     *     numberOfSucceededThings?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
