<?php

namespace Sunaoka\Aws\Structures\Redshift\ResetClusterParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property bool $ResetAllParameters
 * @property list<Shapes\Parameter> $Parameters
 */
class ResetClusterParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     ResetAllParameters?: bool,
     *     Parameters?: list<Shapes\Parameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
