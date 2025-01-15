<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateNodeState;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $NodeId
 * @property 'ACTIVE'|'DRAINING'|null $State
 */
class UpdateNodeStateRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     NodeId: string,
     *     State?: 'ACTIVE'|'DRAINING'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
