<?php

namespace Sunaoka\Aws\Structures\EKS\CreateCapability\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $idcInstanceArn
 * @property string|null $idcRegion
 */
class ArgoCdAwsIdcConfigRequest extends Shape
{
    /**
     * @param array{
     *     idcInstanceArn: string,
     *     idcRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
