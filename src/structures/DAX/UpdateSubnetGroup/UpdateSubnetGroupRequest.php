<?php

namespace Sunaoka\Aws\Structures\DAX\UpdateSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetGroupName
 * @property string $Description
 * @property list<string> $SubnetIds
 */
class UpdateSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     SubnetGroupName: string,
     *     Description?: string,
     *     SubnetIds?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
