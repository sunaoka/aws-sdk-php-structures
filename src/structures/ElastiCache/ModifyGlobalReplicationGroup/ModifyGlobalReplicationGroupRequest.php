<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyGlobalReplicationGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GlobalReplicationGroupId
 * @property bool $ApplyImmediately
 * @property string|null $CacheNodeType
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string|null $CacheParameterGroupName
 * @property string|null $GlobalReplicationGroupDescription
 * @property bool|null $AutomaticFailoverEnabled
 */
class ModifyGlobalReplicationGroupRequest extends Request
{
    /**
     * @param array{
     *     GlobalReplicationGroupId: string,
     *     ApplyImmediately: bool,
     *     CacheNodeType?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     CacheParameterGroupName?: string|null,
     *     GlobalReplicationGroupDescription?: string|null,
     *     AutomaticFailoverEnabled?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
