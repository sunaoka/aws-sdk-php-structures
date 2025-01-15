<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListServiceVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KUBERNETES'|'EKS_ANYWHERE'|null $ServiceName
 * @property ServiceVersion|null $ServiceVersion
 */
class DependentService extends Shape
{
    /**
     * @param array{
     *     ServiceName?: 'KUBERNETES'|'EKS_ANYWHERE'|null,
     *     ServiceVersion?: ServiceVersion|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
