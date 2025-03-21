<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\TagStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $StreamARN
 * @property string|null $StreamName
 * @property array<string, string> $Tags
 */
class TagStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamARN?: string|null,
     *     StreamName?: string|null,
     *     Tags: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
