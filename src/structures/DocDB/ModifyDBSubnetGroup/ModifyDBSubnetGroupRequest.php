<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSubnetGroupName
 * @property string|null $DBSubnetGroupDescription
 * @property list<string> $SubnetIds
 */
class ModifyDBSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     DBSubnetGroupName: string,
     *     DBSubnetGroupDescription?: string|null,
     *     SubnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
