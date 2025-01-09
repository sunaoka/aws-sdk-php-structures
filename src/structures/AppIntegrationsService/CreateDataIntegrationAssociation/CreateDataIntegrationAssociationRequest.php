<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\CreateDataIntegrationAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataIntegrationIdentifier
 * @property string $ClientId
 * @property array<string, array<string, list<string>>> $ObjectConfiguration
 * @property string $DestinationURI
 * @property array<string, string> $ClientAssociationMetadata
 * @property string $ClientToken
 * @property Shapes\ExecutionConfiguration $ExecutionConfiguration
 */
class CreateDataIntegrationAssociationRequest extends Request
{
    /**
     * @param array{
     *     DataIntegrationIdentifier: string,
     *     ClientId?: string,
     *     ObjectConfiguration?: array<string, array<string, list<string>>>,
     *     DestinationURI?: string,
     *     ClientAssociationMetadata?: array<string, string>,
     *     ClientToken?: string,
     *     ExecutionConfiguration?: Shapes\ExecutionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
