<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resource
 * @property array<string, string> $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resource: string,
     *     tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
