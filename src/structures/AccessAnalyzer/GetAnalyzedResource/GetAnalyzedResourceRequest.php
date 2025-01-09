<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetAnalyzedResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $analyzerArn
 * @property string $resourceArn
 */
class GetAnalyzedResourceRequest extends Request
{
    /**
     * @param array{
     *     analyzerArn: string,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
