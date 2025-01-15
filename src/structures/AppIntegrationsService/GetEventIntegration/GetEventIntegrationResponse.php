<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetEventIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $Name
 * @property string|null $Description
 * @property string|null $EventIntegrationArn
 * @property string|null $EventBridgeBus
 * @property Shapes\EventFilter|null $EventFilter
 * @property array<string, string>|null $Tags
 */
class GetEventIntegrationResponse extends Response
{
}
