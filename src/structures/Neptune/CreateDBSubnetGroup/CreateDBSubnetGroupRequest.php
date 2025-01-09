<?php

namespace Sunaoka\Aws\Structures\Neptune\CreateDBSubnetGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DBSubnetGroupName
 * @property string $DBSubnetGroupDescription
 * @property list<string> $SubnetIds
 * @property list<Shapes\Tag> $Tags
 */
class CreateDBSubnetGroupRequest extends Request
{
    /**
     * @param array{
     *     DBSubnetGroupName: string,
     *     DBSubnetGroupDescription: string,
     *     SubnetIds: list<string>,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
