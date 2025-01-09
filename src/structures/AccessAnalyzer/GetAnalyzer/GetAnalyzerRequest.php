<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAnalyzer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerName
 */
class GetAnalyzerRequest extends Request
{
    /**
     * @param array{analyzerName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
