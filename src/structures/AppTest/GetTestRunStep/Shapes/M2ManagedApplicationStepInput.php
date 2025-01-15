<?php

namespace Sunaoka\Aws\Structures\AppTest\GetTestRunStep\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $applicationId
 * @property string $runtime
 * @property string|null $vpcEndpointServiceName
 * @property int|null $listenerPort
 * @property 'Configure'|'Deconfigure' $actionType
 * @property M2ManagedActionProperties|null $properties
 */
class M2ManagedApplicationStepInput extends Shape
{
    /**
     * @param array{
     *     applicationId: string,
     *     runtime: string,
     *     vpcEndpointServiceName?: string|null,
     *     listenerPort?: int|null,
     *     actionType: 'Configure'|'Deconfigure',
     *     properties?: M2ManagedActionProperties|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
