<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\TagStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property string $StreamName
 * @property array<string, string> $Tags
 */
class TagStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamARN?: string,
     *     StreamName?: string,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
