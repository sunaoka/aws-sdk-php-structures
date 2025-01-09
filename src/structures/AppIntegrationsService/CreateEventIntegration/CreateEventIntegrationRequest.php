<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateEventIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Description
 * @property Shapes\EventFilter $EventFilter
 * @property string $EventBridgeBus
 * @property string $ClientToken
 * @property array<string, string> $Tags
 */
class CreateEventIntegrationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string,
     *     EventFilter: Shapes\EventFilter,
     *     EventBridgeBus: string,
     *     ClientToken?: string,
     *     Tags?: array<string, string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
