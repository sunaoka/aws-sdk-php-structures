<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetOtaTaskConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 100>|null $numberOfNotifiedThings
 * @property int<1, 100>|null $numberOfSucceededThings
 */
class RolloutRateIncreaseCriteria extends Shape
{
    /**
     * @param array{
     *     numberOfNotifiedThings?: int<1, 100>|null,
     *     numberOfSucceededThings?: int<1, 100>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
