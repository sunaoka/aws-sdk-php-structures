<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateEventIntegration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string|null $Description
 * @property Shapes\EventFilter $EventFilter
 * @property string $EventBridgeBus
 * @property string|null $ClientToken
 * @property array<string, string>|null $Tags
 */
class CreateEventIntegrationRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Description?: string|null,
     *     EventFilter: Shapes\EventFilter,
     *     EventBridgeBus: string,
     *     ClientToken?: string|null,
     *     Tags?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
