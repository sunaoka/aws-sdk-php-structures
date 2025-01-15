<?php

namespace Sunaoka\Aws\Structures\Translate\TranslateText\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceText
 * @property string|null $TargetText
 */
class Term extends Shape
{
    /**
     * @param array{
     *     SourceText?: string|null,
     *     TargetText?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
