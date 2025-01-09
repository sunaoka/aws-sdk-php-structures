<?php

namespace Sunaoka\Aws\Structures\MemoryDB\ResetParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property bool $AllParameters
 * @property list<string> $ParameterNames
 */
class ResetParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     AllParameters?: bool,
     *     ParameterNames?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
