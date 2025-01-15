<?php

namespace Sunaoka\Aws\Structures\Appstream\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DirectoryName
 * @property string|null $OrganizationalUnitDistinguishedName
 */
class DomainJoinInfo extends Shape
{
    /**
     * @param array{
     *     DirectoryName?: string|null,
     *     OrganizationalUnitDistinguishedName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
