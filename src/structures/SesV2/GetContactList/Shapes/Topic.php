<?php

namespace Sunaoka\Aws\Structures\SesV2\GetContactList\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TopicName
 * @property string $DisplayName
 * @property string|null $Description
 * @property 'OPT_IN'|'OPT_OUT' $DefaultSubscriptionStatus
 */
class Topic extends Shape
{
    /**
     * @param array{
     *     TopicName: string,
     *     DisplayName: string,
     *     Description?: string|null,
     *     DefaultSubscriptionStatus: 'OPT_IN'|'OPT_OUT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
