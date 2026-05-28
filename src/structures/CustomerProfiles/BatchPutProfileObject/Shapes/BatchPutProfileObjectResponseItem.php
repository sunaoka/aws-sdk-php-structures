<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\BatchPutProfileObject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $ProfileObjectUniqueKey
 */
class BatchPutProfileObjectResponseItem extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ProfileObjectUniqueKey: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
