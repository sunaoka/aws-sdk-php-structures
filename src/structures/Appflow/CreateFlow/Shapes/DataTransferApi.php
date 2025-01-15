<?php

namespace Sunaoka\Aws\Structures\Appflow\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property 'SYNC'|'ASYNC'|'AUTOMATIC'|null $Type
 */
class DataTransferApi extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     Type?: 'SYNC'|'ASYNC'|'AUTOMATIC'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
