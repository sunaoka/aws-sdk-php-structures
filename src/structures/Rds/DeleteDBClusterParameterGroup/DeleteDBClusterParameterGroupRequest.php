<?php

namespace Sunaoka\Aws\Structures\Rds\DeleteDBClusterParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterParameterGroupName
 */
class DeleteDBClusterParameterGroupRequest extends Request
{
    /**
     * @param array{DBClusterParameterGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
