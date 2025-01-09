<?php

namespace Sunaoka\Aws\Structures\LocationService\UpdateMap\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PoliticalView
 * @property list<string> $CustomLayers
 */
class MapConfigurationUpdate extends Shape
{
    /**
     * @param array{
     *     PoliticalView?: string,
     *     CustomLayers?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
