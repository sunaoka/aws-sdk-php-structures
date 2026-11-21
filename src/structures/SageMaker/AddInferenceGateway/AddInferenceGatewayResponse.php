<?php

namespace Sunaoka\Aws\Structures\SageMaker\AddInferenceGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property Shapes\GlobalInferenceGatewayMember $Gateway
 * @property 'ADDING'|'ACTIVE'|'REMOVING'|'FAILED'|null $Status
 */
class AddInferenceGatewayResponse extends Response
{
}
