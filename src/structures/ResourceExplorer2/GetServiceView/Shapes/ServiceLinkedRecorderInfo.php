<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\GetServiceView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ServicePrincipal
 * @property string|null $RecorderName
 * @property 'AWS'|'THIRD_PARTY'|null $RecorderType
 */
class ServiceLinkedRecorderInfo extends Shape
{
    /**
     * @param array{
     *     ServicePrincipal?: string|null,
     *     RecorderName?: string|null,
     *     RecorderType?: 'AWS'|'THIRD_PARTY'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
