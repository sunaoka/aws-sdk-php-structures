<?php

namespace Sunaoka\Aws\Structures\KinesisVideo\DeleteStream;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StreamARN
 * @property string|null $CurrentVersion
 */
class DeleteStreamRequest extends Request
{
    /**
     * @param array{
     *     StreamARN: string,
     *     CurrentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
