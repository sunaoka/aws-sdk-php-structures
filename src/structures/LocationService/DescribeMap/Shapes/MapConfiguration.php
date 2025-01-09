<?php

namespace Sunaoka\Aws\Structures\LocationService\DescribeMap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Style
 * @property string $PoliticalView
 * @property list<string> $CustomLayers
 */
class MapConfiguration extends Shape
{
    /**
     * @param array{
     *     Style: string,
     *     PoliticalView?: string,
     *     CustomLayers?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
