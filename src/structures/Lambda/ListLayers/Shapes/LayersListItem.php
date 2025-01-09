<?php

namespace Sunaoka\Aws\Structures\Lambda\ListLayers\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LayerName
 * @property string $LayerArn
 * @property LayerVersionsListItem $LatestMatchingVersion
 */
class LayersListItem extends Shape
{
    /**
     * @param array{
     *     LayerName?: string,
     *     LayerArn?: string,
     *     LatestMatchingVersion?: LayerVersionsListItem
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
