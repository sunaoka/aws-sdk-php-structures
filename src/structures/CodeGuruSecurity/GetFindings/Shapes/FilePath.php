<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CodeLine>|null $codeSnippet
 * @property int|null $endLine
 * @property string|null $name
 * @property string|null $path
 * @property int|null $startLine
 */
class FilePath extends Shape
{
    /**
     * @param array{
     *     codeSnippet?: list<CodeLine>|null,
     *     endLine?: int|null,
     *     name?: string|null,
     *     path?: string|null,
     *     startLine?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
