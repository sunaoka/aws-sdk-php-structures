<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetCodeSnippet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $findingArn
 * @property int|null $startLine
 * @property int|null $endLine
 * @property list<CodeLine>|null $codeSnippet
 * @property list<SuggestedFix>|null $suggestedFixes
 */
class CodeSnippetResult extends Shape
{
    /**
     * @param array{
     *     findingArn?: string|null,
     *     startLine?: int|null,
     *     endLine?: int|null,
     *     codeSnippet?: list<CodeLine>|null,
     *     suggestedFixes?: list<SuggestedFix>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
