<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\BatchUpdateExclusionWindows\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SloId
 * @property string $ErrorCode
 * @property string $ErrorMessage
 */
class BatchUpdateExclusionWindowsError extends Shape
{
    /**
     * @param array{
     *     SloId: string,
     *     ErrorCode: string,
     *     ErrorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
