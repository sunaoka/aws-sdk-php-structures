<?php

namespace Sunaoka\Aws\Structures\OSIS\CreatePipelineEndpoint;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $PipelineArn
 * @property string|null $EndpointId
 * @property 'CREATING'|'ACTIVE'|'CREATE_FAILED'|'DELETING'|'REVOKING'|'REVOKED'|null $Status
 * @property string|null $VpcId
 */
class CreatePipelineEndpointResponse extends Response
{
}
