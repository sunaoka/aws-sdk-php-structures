<?php

namespace Sunaoka\Aws\Structures\kendra\BatchDeleteFeaturedResultsSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property 'InternalError'|'InvalidRequest' $ErrorCode
 * @property string $ErrorMessage
 */
class BatchDeleteFeaturedResultsSetError extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     ErrorCode: 'InternalError'|'InvalidRequest',
     *     ErrorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
