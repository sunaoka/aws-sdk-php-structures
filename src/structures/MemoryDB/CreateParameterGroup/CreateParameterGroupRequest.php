<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateParameterGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ParameterGroupName
 * @property string $Family
 * @property string|null $Description
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateParameterGroupRequest extends Request
{
    /**
     * @param array{
     *     ParameterGroupName: string,
     *     Family: string,
     *     Description?: string|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
