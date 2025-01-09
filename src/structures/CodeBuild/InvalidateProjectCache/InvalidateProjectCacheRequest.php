<?php

namespace Sunaoka\Aws\Structures\CodeBuild\InvalidateProjectCache;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $projectName
 */
class InvalidateProjectCacheRequest extends Request
{
    /**
     * @param array{projectName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
