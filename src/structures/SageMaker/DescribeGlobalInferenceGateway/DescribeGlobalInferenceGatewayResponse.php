<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeGlobalInferenceGateway;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Arn
 * @property string $Id
 * @property string $Name
 * @property string $ExecutionRoleArn
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'FAILED' $Status
 * @property string|null $EndpointUrl
 * @property string|null $VpcEndpointServiceName
 * @property Shapes\GlobalInferenceGatewayRouting|null $Routing
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $FailureReason
 */
class DescribeGlobalInferenceGatewayResponse extends Response
{
}
