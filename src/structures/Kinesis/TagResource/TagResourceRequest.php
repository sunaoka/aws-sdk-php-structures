<?php

namespace Sunaoka\Aws\Structures\Kinesis\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property array<string, string> $Tags
 * @property string $ResourceARN
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     Tags: array<string, string>,
     *     ResourceARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
