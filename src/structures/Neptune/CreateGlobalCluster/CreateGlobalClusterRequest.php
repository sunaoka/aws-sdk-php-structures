<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 * @property string $SourceDBClusterIdentifier
 * @property string $Engine
 * @property string $EngineVersion
 * @property bool $DeletionProtection
 * @property bool $StorageEncrypted
 */
class CreateGlobalClusterRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier: string,
     *     SourceDBClusterIdentifier?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     DeletionProtection?: bool,
     *     StorageEncrypted?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
