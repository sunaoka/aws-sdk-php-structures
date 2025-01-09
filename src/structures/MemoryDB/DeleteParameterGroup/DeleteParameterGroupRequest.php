<?php

namespace Sunaoka\Aws\Structures\MemoryDB\DeleteParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 */
class DeleteParameterGroupRequest extends Request
{
    /**
     * @param array{ParameterGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
