<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\DeleteNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NetworkId
 * @property string|null $MemberId
 * @property string $NodeId
 */
class DeleteNodeRequest extends Request
{
    /**
     * @param array{
     *     NetworkId: string,
     *     MemberId?: string|null,
     *     NodeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
