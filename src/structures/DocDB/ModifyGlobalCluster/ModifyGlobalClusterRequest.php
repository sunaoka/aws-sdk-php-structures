<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 * @property string|null $NewGlobalClusterIdentifier
 * @property bool|null $DeletionProtection
 */
class ModifyGlobalClusterRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier: string,
     *     NewGlobalClusterIdentifier?: string|null,
     *     DeletionProtection?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
