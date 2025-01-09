<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeFleets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DirectoryName
 * @property string $OrganizationalUnitDistinguishedName
 */
class DomainJoinInfo extends Shape
{
    /**
     * @param array{
     *     DirectoryName?: string,
     *     OrganizationalUnitDistinguishedName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
