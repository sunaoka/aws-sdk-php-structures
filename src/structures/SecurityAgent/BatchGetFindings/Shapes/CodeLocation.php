<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $filePath
 * @property int|null $lineStart
 * @property int|null $lineEnd
 * @property string|null $label
 */
class CodeLocation extends Shape
{
    /**
     * @param array{
     *     filePath: string,
     *     lineStart?: int|null,
     *     lineEnd?: int|null,
     *     label?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
