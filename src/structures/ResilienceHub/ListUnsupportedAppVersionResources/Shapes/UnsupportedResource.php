<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListUnsupportedAppVersionResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogicalResourceId $logicalResourceId
 * @property PhysicalResourceId $physicalResourceId
 * @property string $resourceType
 * @property string|null $unsupportedResourceStatus
 */
class UnsupportedResource extends Shape
{
    /**
     * @param array{
     *     logicalResourceId: LogicalResourceId,
     *     physicalResourceId: PhysicalResourceId,
     *     resourceType: string,
     *     unsupportedResourceStatus?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
