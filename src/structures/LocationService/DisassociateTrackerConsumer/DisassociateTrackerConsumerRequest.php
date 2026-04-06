<?php

namespace Sunaoka\Aws\Structures\LocationService\DisassociateTrackerConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ConsumerArn
 * @property string $TrackerName
 */
class DisassociateTrackerConsumerRequest extends Request
{
    /**
     * @param array{
     *     ConsumerArn: string,
     *     TrackerName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
