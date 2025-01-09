<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListResourceGroupingRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property LogicalResourceId $logicalResourceId
 * @property PhysicalResourceId $physicalResourceId
 * @property string $resourceName
 * @property string $resourceType
 * @property list<string> $sourceAppComponentIds
 */
class GroupingResource extends Shape
{
    /**
     * @param array{
     *     logicalResourceId: LogicalResourceId,
     *     physicalResourceId: PhysicalResourceId,
     *     resourceName: string,
     *     resourceType: string,
     *     sourceAppComponentIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
