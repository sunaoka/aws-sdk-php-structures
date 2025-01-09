<?php

namespace Sunaoka\Aws\Structures\NeptuneGraph\DeletePrivateGraphEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $vpcId
 * @property list<string> $subnetIds
 * @property 'CREATING'|'AVAILABLE'|'DELETING'|'FAILED' $status
 * @property string $vpcEndpointId
 */
class DeletePrivateGraphEndpointResponse extends Response
{
}
