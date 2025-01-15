<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBParameterGroupName
 * @property string $DBParameterGroupFamily
 * @property string $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDBParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     DBParameterGroupName: string,
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
