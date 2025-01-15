<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\CreatePrivateGraphEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'FAILED' $status
 * @property string|null $vpcEndpointId
 */
class CreatePrivateGraphEndpointResponse extends Response
{
}
