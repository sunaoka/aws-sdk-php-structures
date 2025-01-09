<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SourceText
 * @property string $TargetText
 */
class Term extends Shape
{
    /**
     * @param array{
     *     SourceText?: string,
     *     TargetText?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
