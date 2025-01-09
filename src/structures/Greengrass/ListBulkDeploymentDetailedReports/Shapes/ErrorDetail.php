<?php

namespace Sunaoka\Aws\Structures\Greengrass\ListBulkDeploymentDetailedReports\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DetailedErrorCode
 * @property string $DetailedErrorMessage
 */
class ErrorDetail extends Shape
{
    /**
     * @param array{
     *     DetailedErrorCode?: string,
     *     DetailedErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
