<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 * @property string $NewGlobalClusterIdentifier
 * @property bool $DeletionProtection
 */
class ModifyGlobalClusterRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier: string,
     *     NewGlobalClusterIdentifier?: string,
     *     DeletionProtection?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
