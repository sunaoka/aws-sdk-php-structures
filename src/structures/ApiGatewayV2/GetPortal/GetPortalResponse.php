<?php

namespace Sunaoka\Aws\Structures\ApiGatewayV2\GetPortal;

use Sunaoka\Aws\Structures\Response;

/**
 * @property Shapes\Authorization|null $Authorization
 * @property Shapes\EndpointConfigurationResponse|null $EndpointConfiguration
 * @property list<string>|null $IncludedPortalProductArns
 * @property \Aws\Api\DateTimeResult|null $LastModified
 * @property \Aws\Api\DateTimeResult|null $LastPublished
 * @property string|null $LastPublishedDescription
 * @property string|null $PortalArn
 * @property Shapes\PortalContent|null $PortalContent
 * @property string|null $PortalId
 * @property Shapes\Preview|null $Preview
 * @property 'PUBLISHED'|'PUBLISH_IN_PROGRESS'|'PUBLISH_FAILED'|'DISABLED'|null $PublishStatus
 * @property string|null $RumAppMonitorName
 * @property Shapes\StatusException|null $StatusException
 * @property array<string, string>|null $Tags
 */
class GetPortalResponse extends Response
{
}
