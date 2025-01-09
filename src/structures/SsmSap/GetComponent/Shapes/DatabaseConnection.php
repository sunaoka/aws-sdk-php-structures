<?php

namespace Sunaoka\Aws\Structures\SsmSap\GetComponent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DIRECT'|'OVERLAY' $DatabaseConnectionMethod
 * @property string $DatabaseArn
 * @property string $ConnectionIp
 */
class DatabaseConnection extends Shape
{
    /**
     * @param array{
     *     DatabaseConnectionMethod?: 'DIRECT'|'OVERLAY',
     *     DatabaseArn?: string,
     *     ConnectionIp?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
