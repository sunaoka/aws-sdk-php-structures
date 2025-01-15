<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceLocationName
 * @property string|null $VodSourceName
 */
class SlateSource extends Shape
{
    /**
     * @param array{
     *     SourceLocationName?: string|null,
     *     VodSourceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
