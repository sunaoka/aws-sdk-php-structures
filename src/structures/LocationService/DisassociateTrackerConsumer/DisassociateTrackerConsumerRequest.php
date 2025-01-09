<?php

namespace Sunaoka\Aws\Structures\LocationService\DisassociateTrackerConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property string $ConsumerArn
 */
class DisassociateTrackerConsumerRequest extends Request
{
    /**
     * @param array{
     *     TrackerName: string,
     *     ConsumerArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
