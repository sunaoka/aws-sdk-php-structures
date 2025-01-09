<?php

namespace Sunaoka\Aws\Structures\DynamoDbStreams\GetRecords\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PrincipalId
 * @property string $Type
 */
class Identity extends Shape
{
    /**
     * @param array{
     *     PrincipalId?: string,
     *     Type?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
