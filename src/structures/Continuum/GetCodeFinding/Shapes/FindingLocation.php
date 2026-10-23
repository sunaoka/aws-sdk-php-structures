<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $filePath
 * @property int|null $startLine
 * @property int|null $endLine
 */
class FindingLocation extends Shape
{
    /**
     * @param array{
     *     filePath?: string|null,
     *     startLine?: int|null,
     *     endLine?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
