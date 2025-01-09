<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string $ModelArn
 * @property int<1, max> $DesiredInferenceUnits
 * @property string $ClientRequestToken
 * @property list<Shapes\Tag> $Tags
 * @property string $DataAccessRoleArn
 * @property string $FlywheelArn
 */
class CreateEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     ModelArn?: string,
     *     DesiredInferenceUnits: int<1, max>,
     *     ClientRequestToken?: string,
     *     Tags?: list<Shapes\Tag>,
     *     DataAccessRoleArn?: string,
     *     FlywheelArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
