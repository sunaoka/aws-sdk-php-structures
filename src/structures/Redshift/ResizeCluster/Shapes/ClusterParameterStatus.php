<?php

namespace Sunaoka\Aws\Structures\Redshift\ResizeCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterName
 * @property string $ParameterApplyStatus
 * @property string $ParameterApplyErrorDescription
 */
class ClusterParameterStatus extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string,
     *     ParameterApplyStatus?: string,
     *     ParameterApplyErrorDescription?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
