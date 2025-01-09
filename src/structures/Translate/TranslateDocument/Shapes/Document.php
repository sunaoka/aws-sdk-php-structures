<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Content
 * @property string $ContentType
 */
class Document extends Shape
{
    /**
     * @param array{
     *     Content: string,
     *     ContentType: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
