<?php

namespace Sunaoka\Aws\Structures\DAX\RebootNode;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterName
 * @property string $NodeId
 */
class RebootNodeRequest extends Request
{
    /**
     * @param array{
     *     ClusterName: string,
     *     NodeId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
