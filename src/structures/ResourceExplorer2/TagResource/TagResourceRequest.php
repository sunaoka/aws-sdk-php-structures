<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string>|null $Tags
 * @property string $resourceArn
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     Tags?: array<string, string>|null,
     *     resourceArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
