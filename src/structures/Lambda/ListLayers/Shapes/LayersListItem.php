<?php

namespace Sunaoka\Aws\Structures\Lambda\ListLayers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LayerName
 * @property string|null $LayerArn
 * @property LayerVersionsListItem|null $LatestMatchingVersion
 */
class LayersListItem extends Shape
{
    /**
     * @param array{
     *     LayerName?: string|null,
     *     LayerArn?: string|null,
     *     LatestMatchingVersion?: LayerVersionsListItem|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
