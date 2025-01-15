<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessmentResourceDrifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogicalResourceId|null $logicalResourceId
 * @property string|null $resourceType
 */
class ResourceIdentifier extends Shape
{
    /**
     * @param array{
     *     logicalResourceId?: LogicalResourceId|null,
     *     resourceType?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
