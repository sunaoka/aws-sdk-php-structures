<?php

namespace Sunaoka\Aws\Structures\FSx\RestoreVolumeFromSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'WARN_ONLY'|'ERROR_ONLY'|'WARN_ERROR' $Level
 * @property string|null $Destination
 */
class LustreLogConfiguration extends Shape
{
    /**
     * @param array{
     *     Level: 'DISABLED'|'WARN_ONLY'|'ERROR_ONLY'|'WARN_ERROR',
     *     Destination?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
