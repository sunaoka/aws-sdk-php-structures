<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceArn
 * @property array<string, string>|null $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceArn: string,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
