<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 * @property string|null $NewGlobalClusterIdentifier
 * @property bool|null $DeletionProtection
 * @property string|null $EngineVersion
 * @property bool|null $AllowMajorVersionUpgrade
 */
class ModifyGlobalClusterRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier: string,
     *     NewGlobalClusterIdentifier?: string|null,
     *     DeletionProtection?: bool|null,
     *     EngineVersion?: string|null,
     *     AllowMajorVersionUpgrade?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
