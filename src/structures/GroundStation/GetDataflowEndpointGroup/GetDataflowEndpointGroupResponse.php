<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetDataflowEndpointGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property int<120, 480> $contactPostPassDurationSeconds
 * @property int<120, 480> $contactPrePassDurationSeconds
 * @property string $dataflowEndpointGroupArn
 * @property string $dataflowEndpointGroupId
 * @property list<Shapes\EndpointDetails> $endpointsDetails
 * @property array<string, string> $tags
 */
class GetDataflowEndpointGroupResponse extends Response
{
}
