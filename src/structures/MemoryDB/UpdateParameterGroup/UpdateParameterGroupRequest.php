<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property list<Shapes\ParameterNameValue> $ParameterNameValues
 */
class UpdateParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     ParameterNameValues: list<Shapes\ParameterNameValue>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
