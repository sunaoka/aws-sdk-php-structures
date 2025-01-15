<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\CreateDeployment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, max>|null $numberOfNotifiedThings
 * @property int<1, max>|null $numberOfSucceededThings
 */
class IoTJobRateIncreaseCriteria extends Shape
{
    /**
     * @param array{
     *     numberOfNotifiedThings?: int<1, max>|null,
     *     numberOfSucceededThings?: int<1, max>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
