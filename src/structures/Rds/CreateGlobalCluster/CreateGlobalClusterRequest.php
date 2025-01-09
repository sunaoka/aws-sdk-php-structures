<?php

namespace Sunaoka\Aws\Structures\Rds\CreateGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 * @property string $SourceDBClusterIdentifier
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $EngineLifecycleSupport
 * @property bool $DeletionProtection
 * @property string $DatabaseName
 * @property bool $StorageEncrypted
 * @property list<Shapes\Tag> $Tags
 */
class CreateGlobalClusterRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier?: string,
     *     SourceDBClusterIdentifier?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     EngineLifecycleSupport?: string,
     *     DeletionProtection?: bool,
     *     DatabaseName?: string,
     *     StorageEncrypted?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
