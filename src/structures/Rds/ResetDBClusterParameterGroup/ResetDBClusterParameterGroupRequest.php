<?php

namespace Sunaoka\Aws\Structures\Rds\ResetDBClusterParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterParameterGroupName
 * @property bool $ResetAllParameters
 * @property list<Shapes\Parameter> $Parameters
 */
class ResetDBClusterParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     DBClusterParameterGroupName: string,
     *     ResetAllParameters?: bool,
     *     Parameters?: list<Shapes\Parameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
