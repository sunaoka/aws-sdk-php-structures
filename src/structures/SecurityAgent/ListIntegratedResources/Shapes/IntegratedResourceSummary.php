<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\ListIntegratedResources\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $integrationId
 * @property IntegratedResourceMetadata $resource
 * @property ProviderResourceCapabilities|null $capabilities
 */
class IntegratedResourceSummary extends Shape
{
    /**
     * @param array{
     *     integrationId: string,
     *     resource: IntegratedResourceMetadata,
     *     capabilities?: ProviderResourceCapabilities|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
