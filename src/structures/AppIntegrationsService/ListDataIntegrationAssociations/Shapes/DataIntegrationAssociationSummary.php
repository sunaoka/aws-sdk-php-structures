<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataIntegrationAssociationArn
 * @property string|null $DataIntegrationArn
 * @property string|null $ClientId
 * @property string|null $DestinationURI
 * @property LastExecutionStatus|null $LastExecutionStatus
 * @property ExecutionConfiguration|null $ExecutionConfiguration
 */
class DataIntegrationAssociationSummary extends Shape
{
    /**
     * @param array{
     *     DataIntegrationAssociationArn?: string|null,
     *     DataIntegrationArn?: string|null,
     *     ClientId?: string|null,
     *     DestinationURI?: string|null,
     *     LastExecutionStatus?: LastExecutionStatus|null,
     *     ExecutionConfiguration?: ExecutionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
