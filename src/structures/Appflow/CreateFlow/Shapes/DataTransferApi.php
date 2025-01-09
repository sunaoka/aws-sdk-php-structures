<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property 'SYNC'|'ASYNC'|'AUTOMATIC' $Type
 */
class DataTransferApi extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     Type?: 'SYNC'|'ASYNC'|'AUTOMATIC'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
