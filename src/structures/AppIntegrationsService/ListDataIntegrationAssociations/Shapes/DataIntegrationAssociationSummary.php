<?php

namespace Sunaoka\Aws\Structures\AppIntegrationsService\ListDataIntegrationAssociations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $DataIntegrationAssociationArn
 * @property string|null $DataIntegrationArn
 * @property string|null $ClientId
 */
class DataIntegrationAssociationSummary extends Shape
{
    /**
     * @param array{
     *     DataIntegrationAssociationArn?: string|null,
     *     DataIntegrationArn?: string|null,
     *     ClientId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
