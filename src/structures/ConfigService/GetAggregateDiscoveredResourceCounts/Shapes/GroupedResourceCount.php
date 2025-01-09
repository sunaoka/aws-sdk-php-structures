<?php

namespace Sunaoka\Aws\Structures\ConfigService\GetAggregateDiscoveredResourceCounts\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GroupName
 * @property int $ResourceCount
 */
class GroupedResourceCount extends Shape
{
    /**
     * @param array{
     *     GroupName: string,
     *     ResourceCount: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
