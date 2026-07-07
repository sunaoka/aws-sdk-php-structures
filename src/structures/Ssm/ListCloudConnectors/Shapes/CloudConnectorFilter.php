<?php

namespace Sunaoka\Aws\Structures\Ssm\ListCloudConnectors\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SubscriptionId'|'TenantId'|null $FilterKey
 * @property list<string>|null $FilterValues
 */
class CloudConnectorFilter extends Shape
{
    /**
     * @param array{
     *     FilterKey?: 'SubscriptionId'|'TenantId'|null,
     *     FilterValues?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
