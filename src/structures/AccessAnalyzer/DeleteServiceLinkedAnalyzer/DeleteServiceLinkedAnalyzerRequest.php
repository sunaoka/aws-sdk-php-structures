<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\DeleteServiceLinkedAnalyzer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property string|null $clientToken
 */
class DeleteServiceLinkedAnalyzerRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
