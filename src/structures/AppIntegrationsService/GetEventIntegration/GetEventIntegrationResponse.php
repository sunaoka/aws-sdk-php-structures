<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\GetEventIntegration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $Name
 * @property string $Description
 * @property string $EventIntegrationArn
 * @property string $EventBridgeBus
 * @property Shapes\EventFilter $EventFilter
 * @property array<string, string> $Tags
 */
class GetEventIntegrationResponse extends Response
{
}
