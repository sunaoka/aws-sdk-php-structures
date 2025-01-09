<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Content
 */
class TranslatedDocument extends Shape
{
    /**
     * @param array{Content: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
