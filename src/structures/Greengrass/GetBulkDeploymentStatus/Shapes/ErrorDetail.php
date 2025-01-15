<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetBulkDeploymentStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DetailedErrorCode
 * @property string|null $DetailedErrorMessage
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{
     *     DetailedErrorCode?: string|null,
     *     DetailedErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
