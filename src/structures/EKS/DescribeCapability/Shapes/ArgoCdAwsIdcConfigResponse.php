<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $idcInstanceArn
 * @property string|null $idcRegion
 * @property string|null $idcManagedApplicationArn
 */
class ArgoCdAwsIdcConfigResponse extends Shape
{
    /**
     * @param array{
     *     idcInstanceArn?: string|null,
     *     idcRegion?: string|null,
     *     idcManagedApplicationArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
