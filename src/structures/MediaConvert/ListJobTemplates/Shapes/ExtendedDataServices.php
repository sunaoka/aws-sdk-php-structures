<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListJobTemplates\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASSTHROUGH'|'STRIP'|null $CopyProtectionAction
 * @property 'PASSTHROUGH'|'STRIP'|null $VchipAction
 */
class ExtendedDataServices extends Shape
{
    /**
     * @param array{
     *     CopyProtectionAction?: 'PASSTHROUGH'|'STRIP'|null,
     *     VchipAction?: 'PASSTHROUGH'|'STRIP'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
