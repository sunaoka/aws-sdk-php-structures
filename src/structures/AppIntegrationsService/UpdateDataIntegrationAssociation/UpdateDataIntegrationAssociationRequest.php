<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\UpdateDataIntegrationAssociation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DataIntegrationIdentifier
 * @property string $DataIntegrationAssociationIdentifier
 * @property Shapes\ExecutionConfiguration $ExecutionConfiguration
 */
class UpdateDataIntegrationAssociationRequest extends Request
{
    /**
     * @param array{
     *     DataIntegrationIdentifier: string,
     *     DataIntegrationAssociationIdentifier: string,
     *     ExecutionConfiguration: Shapes\ExecutionConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
