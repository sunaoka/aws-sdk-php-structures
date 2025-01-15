<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'send-via'|'send-to'|null $Action
 * @property 'dual-hop'|'single-hop'|null $Mode
 * @property WhenSentTo|null $WhenSentTo
 * @property Via|null $Via
 */
class ServiceInsertionAction extends Shape
{
    /**
     * @param array{
     *     Action?: 'send-via'|'send-to'|null,
     *     Mode?: 'dual-hop'|'single-hop'|null,
     *     WhenSentTo?: WhenSentTo|null,
     *     Via?: Via|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
