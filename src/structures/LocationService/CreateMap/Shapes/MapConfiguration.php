<?php

namespace Sunaoka\Aws\Structures\LocationService\CreateMap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PoliticalView
 * @property string $Style
 */
class MapConfiguration extends Shape
{
    /**
     * @param array{
     *     PoliticalView?: string|null,
     *     Style: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
