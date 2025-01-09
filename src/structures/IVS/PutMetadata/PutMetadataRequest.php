<?php

namespace Sunaoka\Aws\Structures\IVS\PutMetadata;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $channelArn
 * @property string $metadata
 */
class PutMetadataRequest extends Request
{
    /**
     * @param array{
     *     channelArn: string,
     *     metadata: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
