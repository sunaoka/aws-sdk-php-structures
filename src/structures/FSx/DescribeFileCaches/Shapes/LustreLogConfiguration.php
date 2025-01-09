<?php

namespace Sunaoka\Aws\Structures\FSx\DescribeFileCaches\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'WARN_ONLY'|'ERROR_ONLY'|'WARN_ERROR' $Level
 * @property string $Destination
 */
class LustreLogConfiguration extends Shape
{
    /**
     * @param array{
     *     Level: 'DISABLED'|'WARN_ONLY'|'ERROR_ONLY'|'WARN_ERROR',
     *     Destination?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
