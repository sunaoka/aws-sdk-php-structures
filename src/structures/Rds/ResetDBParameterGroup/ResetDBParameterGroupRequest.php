<?php

namespace Sunaoka\Aws\Structures\Rds\ResetDBParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBParameterGroupName
 * @property bool|null $ResetAllParameters
 * @property list<Shapes\Parameter>|null $Parameters
 */
class ResetDBParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     DBParameterGroupName: string,
     *     ResetAllParameters?: bool|null,
     *     Parameters?: list<Shapes\Parameter>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
