<?php

namespace Sunaoka\Aws\Structures\Connect\BatchAssociateAnalyticsDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class ErrorResult extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string,
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
