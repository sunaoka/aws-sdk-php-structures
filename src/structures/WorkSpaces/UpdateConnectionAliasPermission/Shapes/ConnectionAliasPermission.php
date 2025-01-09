<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\UpdateConnectionAliasPermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SharedAccountId
 * @property bool $AllowAssociation
 */
class ConnectionAliasPermission extends Shape
{
    /**
     * @param array{
     *     SharedAccountId: string,
     *     AllowAssociation: bool
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
