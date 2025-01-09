<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $Tags
 * @property string $resourceArn
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     Tags?: array<string, string>,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
