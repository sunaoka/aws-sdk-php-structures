<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBParameterGroupName
 */
class DeleteDBParameterGroupRequest extends Request
{
    /**
     * @param array{DBParameterGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
