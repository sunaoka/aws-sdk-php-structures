<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegrationAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataIntegrationIdentifier
 * @property string|null $ClientId
 * @property array<string, array<string, list<string>>>|null $ObjectConfiguration
 * @property string|null $DestinationURI
 * @property array<string, string>|null $ClientAssociationMetadata
 * @property string|null $ClientToken
 * @property Shapes\ExecutionConfiguration|null $ExecutionConfiguration
 */
class CreateDataIntegrationAssociationRequest extends Request
{
    /**
     * @param array{
     *     DataIntegrationIdentifier: string,
     *     ClientId?: string|null,
     *     ObjectConfiguration?: array<string, array<string, list<string>>>|null,
     *     DestinationURI?: string|null,
     *     ClientAssociationMetadata?: array<string, string>|null,
     *     ClientToken?: string|null,
     *     ExecutionConfiguration?: Shapes\ExecutionConfiguration|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
