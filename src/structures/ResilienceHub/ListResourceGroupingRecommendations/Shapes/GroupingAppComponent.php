<?php

namespace Sunaoka\Aws\Structures\ResilienceHub\ListResourceGroupingRecommendations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $appComponentId
 * @property string $appComponentName
 * @property string $appComponentType
 */
class GroupingAppComponent extends Shape
{
    /**
     * @param array{
     *     appComponentId: string,
     *     appComponentName: string,
     *     appComponentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
