<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetCodeSnippet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CodeLine>|null $codeSnippet
 * @property int|null $endLine
 * @property string|null $findingArn
 * @property int|null $startLine
 * @property list<SuggestedFix>|null $suggestedFixes
 */
class CodeSnippetResult extends Shape
{
    /**
     * @param array{
     *     codeSnippet?: list<CodeLine>|null,
     *     endLine?: int|null,
     *     findingArn?: string|null,
     *     startLine?: int|null,
     *     suggestedFixes?: list<SuggestedFix>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
