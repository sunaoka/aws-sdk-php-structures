<?php

namespace Sunaoka\Aws\Structures\DocDB\DeleteGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 */
class DeleteGlobalClusterRequest extends Request
{
    /**
     * @param array{GlobalClusterIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
