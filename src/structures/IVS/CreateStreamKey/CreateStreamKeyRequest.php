<?php

namespace Sunaoka\Aws\Structures\IVS\CreateStreamKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property array<string, string>|null $tags
 */
class CreateStreamKeyRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
