<?php

namespace Sunaoka\Aws\Structures\MemoryDB\ResetParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property bool|null $AllParameters
 * @property list<string>|null $ParameterNames
 */
class ResetParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     AllParameters?: bool|null,
     *     ParameterNames?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
