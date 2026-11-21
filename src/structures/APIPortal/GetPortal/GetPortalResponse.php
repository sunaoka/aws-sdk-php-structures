<?php

namespace Sunaoka\Aws\Structures\APIPortal\GetPortal;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $portalId
 * @property string $portalArn
 * @property Shapes\EndpointConfigurationResponse $endpointConfiguration
 * @property Shapes\Authorization $authorization
 * @property Shapes\PortalContent $portalContent
 * @property list<string> $includedProductArns
 * @property 'PUBLISHED'|'PUBLISH_IN_PROGRESS'|'PUBLISH_FAILED'|'DISABLE_IN_PROGRESS'|'DISABLE_FAILED'|'DISABLED'|null $publishStatus
 * @property Shapes\PortalStatusException|null $statusException
 * @property \Aws\Api\DateTimeResult $updatedAt
 * @property \Aws\Api\DateTimeResult|null $publishedAt
 * @property string|null $publishDescription
 * @property string|null $rumAppMonitorName
 * @property Shapes\Preview|null $preview
 * @property array<string, string>|null $tags
 */
class GetPortalResponse extends Response
{
}
