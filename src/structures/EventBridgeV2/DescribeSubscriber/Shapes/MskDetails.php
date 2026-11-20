<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeSubscriber\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROVISIONING'|'PROVISION_FAILED'|'ACTIVE'|null $ConnectivityState
 * @property string|null $StateReason
 * @property string|null $VpcConnectionArn
 */
class MskDetails extends Shape
{
    /**
     * @param array{
     *     ConnectivityState?: 'PROVISIONING'|'PROVISION_FAILED'|'ACTIVE'|null,
     *     StateReason?: string|null,
     *     VpcConnectionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
