<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $id
 * @property 'ALLOW'|'DENY' $access
 * @property 'INDEX'|'DATASOURCE'|null $membershipType
 */
class PrincipalUser extends Shape
{
    /**
     * @param array{
     *     id?: string|null,
     *     access: 'ALLOW'|'DENY',
     *     membershipType?: 'INDEX'|'DATASOURCE'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
