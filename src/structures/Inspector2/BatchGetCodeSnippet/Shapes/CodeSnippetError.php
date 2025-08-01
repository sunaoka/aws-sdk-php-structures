<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetCodeSnippet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $findingArn
 * @property 'INTERNAL_ERROR'|'ACCESS_DENIED'|'CODE_SNIPPET_NOT_FOUND'|'INVALID_INPUT' $errorCode
 * @property string $errorMessage
 */
class CodeSnippetError extends Shape
{
    /**
     * @param array{
     *     findingArn: string,
     *     errorCode: 'INTERNAL_ERROR'|'ACCESS_DENIED'|'CODE_SNIPPET_NOT_FOUND'|'INVALID_INPUT',
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
