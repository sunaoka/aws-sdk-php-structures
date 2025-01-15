<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<120, 480>|null $contactPostPassDurationSeconds
 * @property int<120, 480>|null $contactPrePassDurationSeconds
 * @property string|null $dataflowEndpointGroupArn
 * @property string|null $dataflowEndpointGroupId
 * @property list<Shapes\EndpointDetails>|null $endpointsDetails
 * @property array<string, string>|null $tags
 */
class GetDataflowEndpointGroupResponse extends Response
{
}
