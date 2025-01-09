<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBClusterParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterParameterGroupName
 * @property string $DBParameterGroupFamily
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateDBClusterParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     DBClusterParameterGroupName: string,
     *     DBParameterGroupFamily: string,
     *     Description: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
