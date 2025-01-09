<?php

namespace Sunaoka\Aws\Structures\Chime\UpdateGlobalSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CdrBucket
 */
class BusinessCallingSettings extends Shape
{
    /**
     * @param array{CdrBucket?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
