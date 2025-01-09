<?php

namespace Sunaoka\Aws\Structures\DocDB\CreateGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 * @property string $SourceDBClusterIdentifier
 * @property string $Engine
 * @property string $EngineVersion
 * @property bool $DeletionProtection
 * @property string $DatabaseName
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
     *     DatabaseName?: string,
     *     StorageEncrypted?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
