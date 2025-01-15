<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSubnetGroupName
 * @property string $DBSubnetGroupDescription
 * @property list<string> $SubnetIds
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateDBSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     DBSubnetGroupName: string,
     *     DBSubnetGroupDescription: string,
     *     SubnetIds: list<string>,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
