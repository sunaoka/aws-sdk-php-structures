<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBClusterParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterParameterGroupName
 * @property list<Shapes\Parameter> $Parameters
 */
class ModifyDBClusterParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     DBClusterParameterGroupName: string,
     *     Parameters: list<Shapes\Parameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
