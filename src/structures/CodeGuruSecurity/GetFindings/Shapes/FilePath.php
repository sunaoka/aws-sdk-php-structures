<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property string|null $path
 * @property int|null $startLine
 * @property int|null $endLine
 * @property list<CodeLine>|null $codeSnippet
 */
class FilePath extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     path?: string|null,
     *     startLine?: int|null,
     *     endLine?: int|null,
     *     codeSnippet?: list<CodeLine>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
