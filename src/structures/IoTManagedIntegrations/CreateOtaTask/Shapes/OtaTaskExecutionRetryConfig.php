<?php

namespace Sunaoka\Aws\Structures\IoTManagedIntegrations\CreateOtaTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<RetryConfigCriteria>|null $RetryConfigCriteria
 */
class OtaTaskExecutionRetryConfig extends Shape
{
    /**
     * @param array{RetryConfigCriteria?: list<RetryConfigCriteria>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
