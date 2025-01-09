<?php

namespace Sunaoka\Aws\Structures\ElastiCache\ModifyCacheParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $CacheParameterGroupName
 * @property list<Shapes\ParameterNameValue> $ParameterNameValues
 */
class ModifyCacheParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     CacheParameterGroupName: string,
     *     ParameterNameValues: list<Shapes\ParameterNameValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
