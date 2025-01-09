<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property 'MicroFocus' $runtime
 * @property string $vpcEndpointServiceName
 * @property string $listenerPort
 */
class M2ManagedApplication extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     runtime: 'MicroFocus',
     *     vpcEndpointServiceName?: string,
     *     listenerPort?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
