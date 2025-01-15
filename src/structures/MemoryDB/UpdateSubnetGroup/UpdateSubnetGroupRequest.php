<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetGroupName
 * @property string|null $Description
 * @property list<string>|null $SubnetIds
 */
class UpdateSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     SubnetGroupName: string,
     *     Description?: string|null,
     *     SubnetIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
