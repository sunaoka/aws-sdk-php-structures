<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListInferenceGateways\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property string $Namespace
 * @property string $ClusterArn
 * @property 'ADDING'|'ACTIVE'|'REMOVING'|'FAILED'|null $Status
 * @property string|null $FailureReason
 */
class GlobalInferenceGatewayMemberSummary extends Shape
{
    /**
     * @param array{
     *     Name: string,
     *     Namespace: string,
     *     ClusterArn: string,
     *     Status?: 'ADDING'|'ACTIVE'|'REMOVING'|'FAILED'|null,
     *     FailureReason?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
