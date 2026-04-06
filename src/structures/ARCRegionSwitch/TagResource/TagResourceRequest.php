<?php

namespace Sunaoka\Aws\Structures\ARCRegionSwitch\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $arn
 * @property array<string, string> $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     arn: string,
     *     tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
