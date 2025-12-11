<?php

namespace Sunaoka\Aws\Structures\NetworkFirewall\UpdateProxyRulePriorities\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ProxyRuleName
 * @property int|null $NewPosition
 */
class ProxyRulePriority extends Shape
{
    /**
     * @param array{
     *     ProxyRuleName?: string|null,
     *     NewPosition?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
