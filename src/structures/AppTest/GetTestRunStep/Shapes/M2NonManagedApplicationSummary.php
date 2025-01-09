<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vpcEndpointServiceName
 * @property int $listenerPort
 * @property 'BluAge' $runtime
 * @property string $webAppName
 */
class M2NonManagedApplicationSummary extends Shape
{
    /**
     * @param array{
     *     vpcEndpointServiceName: string,
     *     listenerPort: int,
     *     runtime: 'BluAge',
     *     webAppName?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
