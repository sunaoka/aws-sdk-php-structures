<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateGlobalInferenceGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $Status
 * @property string|null $ExecutionRoleArn
 * @property Shapes\GlobalInferenceGatewayRouting|null $Routing
 * @property list<Shapes\GlobalInferenceGatewayMember>|null $Gateways
 */
class CreateGlobalInferenceGatewayResponse extends Response
{
}
