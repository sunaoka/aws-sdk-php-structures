<?php

namespace Sunaoka\Aws\Structures\GameSparks\ListStageDeployments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Message
 * @property 'SUCCESS'|'INVALID_ROLE_FAILURE'|'UNSPECIFIED_FAILURE'|null $ResultCode
 */
class DeploymentResult extends Shape
{
    /**
     * @param array{
     *     Message?: string|null,
     *     ResultCode?: 'SUCCESS'|'INVALID_ROLE_FAILURE'|'UNSPECIFIED_FAILURE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
