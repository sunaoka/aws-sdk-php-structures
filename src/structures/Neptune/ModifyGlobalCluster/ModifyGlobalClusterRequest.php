<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 * @property string $NewGlobalClusterIdentifier
 * @property bool $DeletionProtection
 * @property string $EngineVersion
 * @property bool $AllowMajorVersionUpgrade
 */
class ModifyGlobalClusterRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier: string,
     *     NewGlobalClusterIdentifier?: string,
     *     DeletionProtection?: bool,
     *     EngineVersion?: string,
     *     AllowMajorVersionUpgrade?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
