<?php

namespace Sunaoka\Aws\Structures\Lambda\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Resource
 * @property array<string, string> $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     Resource: string,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
