<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterId
 * @property string $NodeId
 */
class DeleteNodeRequest extends Request
{
    /**
     * @param array{
     *     ClusterId: string,
     *     NodeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
