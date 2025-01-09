<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListAppAssessmentResourceDrifts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogicalResourceId $logicalResourceId
 * @property string $resourceType
 */
class ResourceIdentifier extends Shape
{
    /**
     * @param array{
     *     logicalResourceId?: LogicalResourceId,
     *     resourceType?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
