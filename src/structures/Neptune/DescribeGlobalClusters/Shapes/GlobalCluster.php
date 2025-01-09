<?php

namespace Sunaoka\Aws\Structures\Neptune\DescribeGlobalClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $GlobalClusterIdentifier
 * @property string $GlobalClusterResourceId
 * @property string $GlobalClusterArn
 * @property string $Status
 * @property string $Engine
 * @property string $EngineVersion
 * @property bool $StorageEncrypted
 * @property bool $DeletionProtection
 * @property list<GlobalClusterMember> $GlobalClusterMembers
 */
class GlobalCluster extends Shape
{
    /**
     * @param array{
     *     GlobalClusterIdentifier?: string,
     *     GlobalClusterResourceId?: string,
     *     GlobalClusterArn?: string,
     *     Status?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     StorageEncrypted?: bool,
     *     DeletionProtection?: bool,
     *     GlobalClusterMembers?: list<GlobalClusterMember>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
