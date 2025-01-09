<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBParameterGroupName
 * @property string $DBParameterGroupFamily
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateDBParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     DBParameterGroupName: string,
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
