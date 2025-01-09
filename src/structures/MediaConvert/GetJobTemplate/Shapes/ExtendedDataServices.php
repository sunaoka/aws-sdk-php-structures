<?php

namespace Sunaoka\Aws\Structures\MediaConvert\GetJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASSTHROUGH'|'STRIP' $CopyProtectionAction
 * @property 'PASSTHROUGH'|'STRIP' $VchipAction
 */
class ExtendedDataServices extends Shape
{
    /**
     * @param array{
     *     CopyProtectionAction?: 'PASSTHROUGH'|'STRIP',
     *     VchipAction?: 'PASSTHROUGH'|'STRIP'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
