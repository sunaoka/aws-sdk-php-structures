<?php

namespace Sunaoka\Aws\Structures\AppTest\UpdateTestConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vpcEndpointServiceName
 * @property string $listenerPort
 * @property 'BluAge' $runtime
 * @property string|null $webAppName
 */
class M2NonManagedApplication extends Shape
{
    /**
     * @param array{
     *     vpcEndpointServiceName: string,
     *     listenerPort: string,
     *     runtime: 'BluAge',
     *     webAppName?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
