<?php

namespace Sunaoka\Aws\Structures\Comprehend\UpdateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 * @property string $DesiredModelArn
 * @property int $DesiredInferenceUnits
 * @property string $DesiredDataAccessRoleArn
 * @property string $FlywheelArn
 */
class UpdateEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointArn: string,
     *     DesiredModelArn?: string,
     *     DesiredInferenceUnits?: int,
     *     DesiredDataAccessRoleArn?: string,
     *     FlywheelArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
