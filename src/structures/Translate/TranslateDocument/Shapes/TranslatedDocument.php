<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Psr\Http\Message\StreamInterface $Content
 */
class TranslatedDocument extends Shape
{
    /**
     * @param array{Content: \Psr\Http\Message\StreamInterface} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
