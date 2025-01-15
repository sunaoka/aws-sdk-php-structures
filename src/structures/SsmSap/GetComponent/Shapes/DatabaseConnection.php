<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIRECT'|'OVERLAY'|null $DatabaseConnectionMethod
 * @property string|null $DatabaseArn
 * @property string|null $ConnectionIp
 */
class DatabaseConnection extends Shape
{
    /**
     * @param array{
     *     DatabaseConnectionMethod?: 'DIRECT'|'OVERLAY'|null,
     *     DatabaseArn?: string|null,
     *     ConnectionIp?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
