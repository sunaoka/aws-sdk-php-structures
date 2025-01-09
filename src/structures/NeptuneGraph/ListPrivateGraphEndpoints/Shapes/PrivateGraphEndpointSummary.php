<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\ListPrivateGraphEndpoints\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'FAILED' $status
 * @property string $vpcEndpointId
 */
class PrivateGraphEndpointSummary extends Shape
{
    /**
     * @param array{
     *     vpcId: string,
     *     subnetIds: list<string>,
     *     status: 'CREATING'|'AVAILABLE'|'DELETING'|'FAILED',
     *     vpcEndpointId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
