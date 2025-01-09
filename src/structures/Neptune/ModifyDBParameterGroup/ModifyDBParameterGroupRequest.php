<?php

namespace Sunaoka\Aws\Structures\Neptune\ModifyDBParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBParameterGroupName
 * @property list<Shapes\Parameter> $Parameters
 */
class ModifyDBParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     DBParameterGroupName: string,
     *     Parameters: list<Shapes\Parameter>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
