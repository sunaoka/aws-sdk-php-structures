<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateGlobalInferenceGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $Status
 * @property Shapes\GlobalInferenceGatewayRouting|null $Routing
 */
class UpdateGlobalInferenceGatewayResponse extends Response
{
}
