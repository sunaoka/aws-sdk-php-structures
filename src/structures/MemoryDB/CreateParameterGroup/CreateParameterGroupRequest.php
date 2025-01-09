<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property string $Family
 * @property string $Description
 * @property list<Shapes\Tag> $Tags
 */
class CreateParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     Family: string,
     *     Description?: string,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
