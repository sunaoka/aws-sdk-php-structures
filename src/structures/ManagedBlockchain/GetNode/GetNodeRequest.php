<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\GetNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string $MemberId
 * @property string $NodeId
 */
class GetNodeRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     MemberId?: string,
     *     NodeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
