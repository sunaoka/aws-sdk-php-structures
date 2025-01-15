<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListEventIntegrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EventIntegrationAssociationArn
 * @property string|null $EventIntegrationAssociationId
 * @property string|null $EventIntegrationName
 * @property string|null $ClientId
 * @property string|null $EventBridgeRuleName
 * @property array<string, string>|null $ClientAssociationMetadata
 */
class EventIntegrationAssociation extends Shape
{
    /**
     * @param array{
     *     EventIntegrationAssociationArn?: string|null,
     *     EventIntegrationAssociationId?: string|null,
     *     EventIntegrationName?: string|null,
     *     ClientId?: string|null,
     *     EventBridgeRuleName?: string|null,
     *     ClientAssociationMetadata?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
