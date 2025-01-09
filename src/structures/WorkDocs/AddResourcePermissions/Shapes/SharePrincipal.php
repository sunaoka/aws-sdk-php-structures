<?php

namespace Sunaoka\Aws\Structures\WorkDocs\AddResourcePermissions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'USER'|'GROUP'|'INVITE'|'ANONYMOUS'|'ORGANIZATION' $Type
 * @property 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER' $Role
 */
class SharePrincipal extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Type: 'USER'|'GROUP'|'INVITE'|'ANONYMOUS'|'ORGANIZATION',
     *     Role: 'VIEWER'|'CONTRIBUTOR'|'OWNER'|'COOWNER'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
