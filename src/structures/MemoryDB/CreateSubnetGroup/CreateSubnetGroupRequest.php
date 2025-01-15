<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetGroupName
 * @property string|null $Description
 * @property list<string> $SubnetIds
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     SubnetGroupName: string,
     *     Description?: string|null,
     *     SubnetIds: list<string>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
