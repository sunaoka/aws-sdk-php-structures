<?php

namespace Sunaoka\Aws\Structures\Pinpoint\UpdateTemplateActiveVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Version
 */
class TemplateActiveVersionRequest extends Shape
{
    /**
     * @param array{Version?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
