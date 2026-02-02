<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceName
 */
class NdiSourceSettings extends Shape
{
    /**
     * @param array{SourceName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
