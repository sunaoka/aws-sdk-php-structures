<?php

namespace Sunaoka\Aws\Structures\WorkDocs\SearchResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property list<'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER'> $Roles
 */
class SearchPrincipalType extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Roles?: list<'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER'>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
