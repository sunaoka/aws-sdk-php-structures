<?php

namespace Sunaoka\Aws\Structures\QBusiness\BatchPutDocument\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property 'ALLOW'|'DENY' $access
 * @property 'INDEX'|'DATASOURCE' $membershipType
 */
class PrincipalGroup extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     access: 'ALLOW'|'DENY',
     *     membershipType?: 'INDEX'|'DATASOURCE'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
