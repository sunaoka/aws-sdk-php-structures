<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateUserProfile\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $AccessStatus
 * @property 'R_STUDIO_ADMIN'|'R_STUDIO_USER'|null $UserGroup
 */
class RStudioServerProAppSettings extends Shape
{
    /**
     * @param array{
     *     AccessStatus?: 'ENABLED'|'DISABLED'|null,
     *     UserGroup?: 'R_STUDIO_ADMIN'|'R_STUDIO_USER'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
