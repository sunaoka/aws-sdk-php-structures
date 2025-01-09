<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteClusterParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 */
class DeleteClusterParameterGroupRequest extends Request
{
    /**
     * @param array{ParameterGroupName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
