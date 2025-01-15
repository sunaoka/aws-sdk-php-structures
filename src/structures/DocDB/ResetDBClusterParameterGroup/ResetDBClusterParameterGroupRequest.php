<?php

namespace Sunaoka\Aws\Structures\DocDB\ResetDBClusterParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterParameterGroupName
 * @property bool|null $ResetAllParameters
 * @property list<Shapes\Parameter>|null $Parameters
 */
class ResetDBClusterParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     DBClusterParameterGroupName: string,
     *     ResetAllParameters?: bool|null,
     *     Parameters?: list<Shapes\Parameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
