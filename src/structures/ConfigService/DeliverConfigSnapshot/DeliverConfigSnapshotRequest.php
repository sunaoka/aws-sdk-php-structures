<?php

namespace Sunaoka\Aws\Structures\ConfigService\DeliverConfigSnapshot;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $deliveryChannelName
 */
class DeliverConfigSnapshotRequest extends Request
{
    /**
     * @param array{deliveryChannelName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
