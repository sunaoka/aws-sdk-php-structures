<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataIntegrationAssociationArn
 * @property string $DataIntegrationArn
 * @property string $ClientId
 * @property string $DestinationURI
 * @property LastExecutionStatus $LastExecutionStatus
 * @property ExecutionConfiguration $ExecutionConfiguration
 */
class DataIntegrationAssociationSummary extends Shape
{
    /**
     * @param array{
     *     DataIntegrationAssociationArn?: string,
     *     DataIntegrationArn?: string,
     *     ClientId?: string,
     *     DestinationURI?: string,
     *     LastExecutionStatus?: LastExecutionStatus,
     *     ExecutionConfiguration?: ExecutionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
