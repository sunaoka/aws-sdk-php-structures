<?php

namespace Sunaoka\Aws\Structures\Comprehend\UpdateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointArn
 * @property string|null $DesiredModelArn
 * @property int<1, max>|null $DesiredInferenceUnits
 * @property string|null $DesiredDataAccessRoleArn
 * @property string|null $FlywheelArn
 */
class UpdateEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointArn: string,
     *     DesiredModelArn?: string|null,
     *     DesiredInferenceUnits?: int<1, max>|null,
     *     DesiredDataAccessRoleArn?: string|null,
     *     FlywheelArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
