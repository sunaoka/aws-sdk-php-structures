<?php

namespace Sunaoka\Aws\Structures\MediaConnect\AddBridgeSources;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $BridgeArn
 * @property list<Shapes\AddBridgeSourceRequest> $Sources
 */
class AddBridgeSourcesRequest extends Request
{
    /**
     * @param array{
     *     BridgeArn: string,
     *     Sources: list<Shapes\AddBridgeSourceRequest>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
