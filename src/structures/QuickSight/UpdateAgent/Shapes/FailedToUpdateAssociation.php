<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $ErrorMessage
 * @property string|null $ErrorCode
 */
class FailedToUpdateAssociation extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     ErrorMessage?: string|null,
     *     ErrorCode?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
