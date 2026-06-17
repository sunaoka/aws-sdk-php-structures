<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchDeleteThreatModels\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $threatModelId
 * @property string|null $reason
 */
class DeleteThreatModelFailure extends Shape
{
    /**
     * @param array{
     *     threatModelId?: string|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
