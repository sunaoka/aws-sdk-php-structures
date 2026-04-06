<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetProductRestEndpointPage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\EndpointDisplayContentResponse|null $DisplayContent
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property string|null $ProductRestEndpointPageArn
 * @property string|null $ProductRestEndpointPageId
 * @property string|null $RawDisplayContent
 * @property Shapes\RestEndpointIdentifier|null $RestEndpointIdentifier
 * @property 'AVAILABLE'|'IN_PROGRESS'|'FAILED'|null $Status
 * @property Shapes\StatusException|null $StatusException
 * @property 'ENABLED'|'DISABLED'|null $TryItState
 */
class GetProductRestEndpointPageResponse extends Response
{
}
