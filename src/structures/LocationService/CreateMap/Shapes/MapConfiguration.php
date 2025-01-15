<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateMap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Style
 * @property string|null $PoliticalView
 * @property list<string>|null $CustomLayers
 */
class MapConfiguration extends Shape
{
    /**
     * @param array{
     *     Style: string,
     *     PoliticalView?: string|null,
     *     CustomLayers?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
