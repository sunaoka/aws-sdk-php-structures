<?php

namespace Sunaoka\Aws\Structures\Comprehend\CreateEndpoint;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $EndpointName
 * @property string|null $ModelArn
 * @property int<1, max> $DesiredInferenceUnits
 * @property string|null $ClientRequestToken
 * @property list<Shapes\Tag>|null $Tags
 * @property string|null $DataAccessRoleArn
 * @property string|null $FlywheelArn
 */
class CreateEndpointRequest extends Request
{
    /**
     * @param array{
     *     EndpointName: string,
     *     ModelArn?: string|null,
     *     DesiredInferenceUnits: int<1, max>,
     *     ClientRequestToken?: string|null,
     *     Tags?: list<Shapes\Tag>|null,
     *     DataAccessRoleArn?: string|null,
     *     FlywheelArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
