<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ResetCacheParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheParameterGroupName
 * @property bool|null $ResetAllParameters
 * @property list<Shapes\ParameterNameValue>|null $ParameterNameValues
 */
class ResetCacheParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     CacheParameterGroupName: string,
     *     ResetAllParameters?: bool|null,
     *     ParameterNameValues?: list<Shapes\ParameterNameValue>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
