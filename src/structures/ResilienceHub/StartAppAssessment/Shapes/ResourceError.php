<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\StartAppAssessment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $logicalResourceId
 * @property string|null $physicalResourceId
 * @property string|null $reason
 */
class ResourceError extends Shape
{
    /**
     * @param array{
     *     logicalResourceId?: string|null,
     *     physicalResourceId?: string|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
