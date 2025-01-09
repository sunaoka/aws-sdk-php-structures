<?php

namespace Sunaoka\Aws\Structures\NetworkManager\GetCoreNetworkChangeSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'send-via'|'send-to' $Action
 * @property 'dual-hop'|'single-hop' $Mode
 * @property WhenSentTo $WhenSentTo
 * @property Via $Via
 */
class ServiceInsertionAction extends Shape
{
    /**
     * @param array{
     *     Action?: 'send-via'|'send-to',
     *     Mode?: 'dual-hop'|'single-hop',
     *     WhenSentTo?: WhenSentTo,
     *     Via?: Via
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
