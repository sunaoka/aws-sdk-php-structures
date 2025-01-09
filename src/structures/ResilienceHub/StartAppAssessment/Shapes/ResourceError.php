<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $logicalResourceId
 * @property string $physicalResourceId
 * @property string $reason
 */
class ResourceError extends Shape
{
    /**
     * @param array{
     *     logicalResourceId?: string,
     *     physicalResourceId?: string,
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
