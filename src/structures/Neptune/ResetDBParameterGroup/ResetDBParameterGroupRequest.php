<?php

namespace Sunaoka\Aws\Structures\Neptune\ResetDBParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBParameterGroupName
 * @property bool $ResetAllParameters
 * @property list<Shapes\Parameter> $Parameters
 */
class ResetDBParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     DBParameterGroupName: string,
     *     ResetAllParameters?: bool,
     *     Parameters?: list<Shapes\Parameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
