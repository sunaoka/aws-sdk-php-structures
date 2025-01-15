<?php

namespace Sunaoka\Aws\Structures\Connect\BatchAssociateAnalyticsDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class ErrorResult extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
