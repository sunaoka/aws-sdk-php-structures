<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateEndpointWeightsAndCapacities;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property list<Shapes\DesiredWeightAndCapacity> $DesiredWeightsAndCapacities
 */
class UpdateEndpointWeightsAndCapacitiesRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     DesiredWeightsAndCapacities: list<Shapes\DesiredWeightAndCapacity>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
