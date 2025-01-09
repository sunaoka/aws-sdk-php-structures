<?php

namespace Sunaoka\Aws\Structures\MediaTailor\ListChannels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceLocationName
 * @property string $VodSourceName
 */
class SlateSource extends Shape
{
    /**
     * @param array{
     *     SourceLocationName?: string,
     *     VodSourceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
