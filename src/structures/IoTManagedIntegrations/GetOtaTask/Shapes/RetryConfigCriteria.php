<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\GetOtaTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FAILED'|'TIMED_OUT'|'ALL'|null $FailureType
 * @property int<0, 10>|null $MinNumberOfRetries
 */
class RetryConfigCriteria extends Shape
{
    /**
     * @param array{
     *     FailureType?: 'FAILED'|'TIMED_OUT'|'ALL'|null,
     *     MinNumberOfRetries?: int<0, 10>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
