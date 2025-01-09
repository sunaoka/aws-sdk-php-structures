<?php

namespace Sunaoka\Aws\Structures\kendra\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DatabaseHost
 * @property int $DatabasePort
 * @property string $DatabaseName
 * @property string $TableName
 * @property string $SecretArn
 */
class ConnectionConfiguration extends Shape
{
    /**
     * @param array{
     *     DatabaseHost: string,
     *     DatabasePort: int,
     *     DatabaseName: string,
     *     TableName: string,
     *     SecretArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
