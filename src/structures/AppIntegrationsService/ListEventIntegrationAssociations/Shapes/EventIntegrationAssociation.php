<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListEventIntegrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EventIntegrationAssociationArn
 * @property string $EventIntegrationAssociationId
 * @property string $EventIntegrationName
 * @property string $ClientId
 * @property string $EventBridgeRuleName
 * @property array<string, string> $ClientAssociationMetadata
 */
class EventIntegrationAssociation extends Shape
{
    /**
     * @param array{
     *     EventIntegrationAssociationArn?: string,
     *     EventIntegrationAssociationId?: string,
     *     EventIntegrationName?: string,
     *     ClientId?: string,
     *     EventBridgeRuleName?: string,
     *     ClientAssociationMetadata?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
