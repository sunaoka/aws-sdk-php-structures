<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetGroupName
 * @property string $Description
 * @property list<string> $SubnetIds
 * @property list<Shapes\Tag> $Tags
 */
class CreateSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     SubnetGroupName: string,
     *     Description?: string,
     *     SubnetIds: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
