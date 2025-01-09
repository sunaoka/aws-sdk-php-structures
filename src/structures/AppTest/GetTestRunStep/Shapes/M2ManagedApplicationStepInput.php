<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $runtime
 * @property string $vpcEndpointServiceName
 * @property int $listenerPort
 * @property 'Configure'|'Deconfigure' $actionType
 * @property M2ManagedActionProperties $properties
 */
class M2ManagedApplicationStepInput extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     runtime: string,
     *     vpcEndpointServiceName?: string,
     *     listenerPort?: int,
     *     actionType: 'Configure'|'Deconfigure',
     *     properties?: M2ManagedActionProperties
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
