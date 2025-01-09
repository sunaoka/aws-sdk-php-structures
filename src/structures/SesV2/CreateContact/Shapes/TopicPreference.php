<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicName
 * @property 'OPT_IN'|'OPT_OUT' $SubscriptionStatus
 */
class TopicPreference extends Shape
{
    /**
     * @param array{
     *     TopicName: string,
     *     SubscriptionStatus: 'OPT_IN'|'OPT_OUT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
