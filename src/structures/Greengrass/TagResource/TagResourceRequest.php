<?php

namespace Sunaoka\Aws\Structures\Greengrass\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceArn
 * @property array<string, string>|null $tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceArn: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
