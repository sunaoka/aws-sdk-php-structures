<?php

namespace Sunaoka\Aws\Structures\Inspector2\BatchGetCodeSnippet;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $findingArns
 */
class BatchGetCodeSnippetRequest extends Request
{
    /**
     * @param array{findingArns: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
