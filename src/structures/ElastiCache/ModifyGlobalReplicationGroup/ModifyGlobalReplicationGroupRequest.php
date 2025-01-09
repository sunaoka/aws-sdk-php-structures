<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyGlobalReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalReplicationGroupId
 * @property bool $ApplyImmediately
 * @property string $CacheNodeType
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $CacheParameterGroupName
 * @property string $GlobalReplicationGroupDescription
 * @property bool $AutomaticFailoverEnabled
 */
class ModifyGlobalReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     GlobalReplicationGroupId: string,
     *     ApplyImmediately: bool,
     *     CacheNodeType?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     CacheParameterGroupName?: string,
     *     GlobalReplicationGroupDescription?: string,
     *     AutomaticFailoverEnabled?: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
