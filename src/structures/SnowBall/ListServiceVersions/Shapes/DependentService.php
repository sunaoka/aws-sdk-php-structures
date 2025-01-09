<?php

namespace Sunaoka\Aws\Structures\SnowBall\ListServiceVersions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KUBERNETES'|'EKS_ANYWHERE' $ServiceName
 * @property ServiceVersion $ServiceVersion
 */
class DependentService extends Shape
{
    /**
     * @param array{
     *     ServiceName?: 'KUBERNETES'|'EKS_ANYWHERE',
     *     ServiceVersion?: ServiceVersion
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
