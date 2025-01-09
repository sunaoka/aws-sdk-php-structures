<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ResetCacheParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheParameterGroupName
 * @property bool $ResetAllParameters
 * @property list<Shapes\ParameterNameValue> $ParameterNameValues
 */
class ResetCacheParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     CacheParameterGroupName: string,
     *     ResetAllParameters?: bool,
     *     ParameterNameValues?: list<Shapes\ParameterNameValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
