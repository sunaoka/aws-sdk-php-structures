<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSubnetGroupName
 * @property string $DBSubnetGroupDescription
 * @property list<string> $SubnetIds
 */
class ModifyDBSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     DBSubnetGroupName: string,
     *     DBSubnetGroupDescription?: string,
     *     SubnetIds: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
