<?php

namespace Sunaoka\Aws\Structures\AppTest\CreateTestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property 'MicroFocus' $runtime
 * @property string|null $vpcEndpointServiceName
 * @property string|null $listenerPort
 */
class M2ManagedApplication extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     runtime: 'MicroFocus',
     *     vpcEndpointServiceName?: string|null,
     *     listenerPort?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
