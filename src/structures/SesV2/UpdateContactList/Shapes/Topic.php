<?php

namespace Sunaoka\Aws\Structures\SesV2\UpdateContactList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicName
 * @property string $DisplayName
 * @property string $Description
 * @property 'OPT_IN'|'OPT_OUT' $DefaultSubscriptionStatus
 */
class Topic extends Shape
{
    /**
     * @param array{
     *     TopicName: string,
     *     DisplayName: string,
     *     Description?: string,
     *     DefaultSubscriptionStatus: 'OPT_IN'|'OPT_OUT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
