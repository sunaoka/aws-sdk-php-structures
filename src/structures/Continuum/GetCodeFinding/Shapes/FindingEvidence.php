<?php

namespace Sunaoka\Aws\Structures\Continuum\GetCodeFinding\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $file
 * @property int|null $line
 * @property string|null $snippet
 */
class FindingEvidence extends Shape
{
    /**
     * @param array{
     *     file?: string|null,
     *     line?: int|null,
     *     snippet?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
