<?php

namespace Sunaoka\Aws\Structures\MediaConnect\RemoveBridgeSource;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 * @property string $SourceName
 */
class RemoveBridgeSourceRequest extends Request
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     SourceName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
