<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchPutProfileObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Object
 */
class BatchPutProfileObjectRequestItem extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Object: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
