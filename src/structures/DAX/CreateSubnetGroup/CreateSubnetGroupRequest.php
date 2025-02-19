<?php

namespace Sunaoka\Aws\Structures\DAX\CreateSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SubnetGroupName
 * @property string|null $Description
 * @property list<string> $SubnetIds
 */
class CreateSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     SubnetGroupName: string,
     *     Description?: string|null,
     *     SubnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
