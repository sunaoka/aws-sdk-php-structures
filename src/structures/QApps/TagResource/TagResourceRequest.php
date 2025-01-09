<?php

namespace Sunaoka\Aws\Structures\QApps\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceARN
 * @property array<string, string> $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     resourceARN: string,
     *     tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
