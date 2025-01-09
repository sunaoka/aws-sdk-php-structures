<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetCodeSnippet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<CodeLine> $codeSnippet
 * @property int $endLine
 * @property string $findingArn
 * @property int $startLine
 * @property list<SuggestedFix> $suggestedFixes
 */
class CodeSnippetResult extends Shape
{
    /**
     * @param array{
     *     codeSnippet?: list<CodeLine>,
     *     endLine?: int,
     *     findingArn?: string,
     *     startLine?: int,
     *     suggestedFixes?: list<SuggestedFix>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
