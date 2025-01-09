<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CodeLine> $codeSnippet
 * @property int $endLine
 * @property string $name
 * @property string $path
 * @property int $startLine
 */
class FilePath extends Shape
{
    /**
     * @param array{
     *     codeSnippet?: list<CodeLine>,
     *     endLine?: int,
     *     name?: string,
     *     path?: string,
     *     startLine?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
