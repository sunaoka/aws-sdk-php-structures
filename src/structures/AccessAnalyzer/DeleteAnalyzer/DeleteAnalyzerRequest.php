<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\DeleteAnalyzer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 * @property string $clientToken
 */
class DeleteAnalyzerRequest extends Request
{
    /**
     * @param array{
     *     analyzerName: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
