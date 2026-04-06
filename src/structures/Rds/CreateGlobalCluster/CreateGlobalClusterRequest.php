<?php

namespace Sunaoka\Aws\Structures\Rds\CreateGlobalCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalClusterIdentifier
 * @property string|null $SourceDBClusterIdentifier
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $EngineLifecycleSupport
 * @property bool|null $DeletionProtection
 * @property string|null $DatabaseName
 * @property bool|null $StorageEncrypted
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateGlobalClusterRequest extends Request
{
    /**
     * @param array{
     *     GlobalClusterIdentifier: string,
     *     SourceDBClusterIdentifier?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     EngineLifecycleSupport?: string|null,
     *     DeletionProtection?: bool|null,
     *     DatabaseName?: string|null,
     *     StorageEncrypted?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
