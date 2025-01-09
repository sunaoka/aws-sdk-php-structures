<?php

namespace Sunaoka\Aws\Structures\Redshift\ModifyClusterParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property list<Shapes\Parameter> $Parameters
 */
class ModifyClusterParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     Parameters: list<Shapes\Parameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
