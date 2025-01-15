<?php

namespace Sunaoka\Aws\Structures\Redshift\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ParameterName
 * @property string|null $ParameterApplyStatus
 * @property string|null $ParameterApplyErrorDescription
 */
class ClusterParameterStatus extends Shape
{
    /**
     * @param array{
     *     ParameterName?: string|null,
     *     ParameterApplyStatus?: string|null,
     *     ParameterApplyErrorDescription?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
