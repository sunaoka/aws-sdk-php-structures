<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateClusterParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property string $ParameterGroupFamily
 * @property string $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateClusterParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     ParameterGroupFamily: string,
     *     Description: string,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
