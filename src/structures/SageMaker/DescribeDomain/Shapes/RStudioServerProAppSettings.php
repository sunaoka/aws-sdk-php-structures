<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $AccessStatus
 * @property 'R_STUDIO_ADMIN'|'R_STUDIO_USER' $UserGroup
 */
class RStudioServerProAppSettings extends Shape
{
    /**
     * @param array{
     *     AccessStatus?: 'ENABLED'|'DISABLED',
     *     UserGroup?: 'R_STUDIO_ADMIN'|'R_STUDIO_USER'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
