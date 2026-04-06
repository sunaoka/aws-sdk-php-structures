<?php

namespace Sunaoka\Aws\Structures\LocationService\AssociateTrackerConsumer;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TrackerName
 * @property string $ConsumerArn
 */
class AssociateTrackerConsumerRequest extends Request
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
