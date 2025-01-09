<?php

namespace Sunaoka\Aws\Structures\Textract\TagResource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ResourceARN
 * @property array<string, string> $Tags
 */
class TagResourceRequest extends Request
{
    /**
     * @param array{
     *     ResourceARN: string,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
