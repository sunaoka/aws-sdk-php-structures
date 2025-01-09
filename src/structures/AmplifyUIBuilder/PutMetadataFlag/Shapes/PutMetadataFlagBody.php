<?php

namespace Sunaoka\Aws\Structures\AmplifyUIBuilder\PutMetadataFlag\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $newValue
 */
class PutMetadataFlagBody extends Shape
{
    /**
     * @param array{newValue: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
