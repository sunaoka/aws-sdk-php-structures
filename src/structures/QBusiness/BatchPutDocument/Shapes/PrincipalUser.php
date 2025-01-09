<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $id
 * @property 'ALLOW'|'DENY' $access
 * @property 'INDEX'|'DATASOURCE' $membershipType
 */
class PrincipalUser extends Shape
{
    /**
     * @param array{
     *     id?: string,
     *     access: 'ALLOW'|'DENY',
     *     membershipType?: 'INDEX'|'DATASOURCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
