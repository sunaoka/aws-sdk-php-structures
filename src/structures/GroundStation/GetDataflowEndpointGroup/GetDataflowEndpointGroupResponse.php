<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $dataflowEndpointGroupId
 * @property string|null $dataflowEndpointGroupArn
 * @property list<Shapes\EndpointDetails>|null $endpointsDetails
 * @property array<string, string>|null $tags
 * @property int<30, 480>|null $contactPrePassDurationSeconds
 * @property int<30, 480>|null $contactPostPassDurationSeconds
 */
class GetDataflowEndpointGroupResponse extends Response
{
}
