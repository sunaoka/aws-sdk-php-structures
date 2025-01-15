<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBClusterParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBClusterParameterGroupName
 * @property string $DBParameterGroupFamily
 * @property string $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDBClusterParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     DBClusterParameterGroupName: string,
     *     DBParameterGroupFamily: string,
     *     Description: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
