<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\UpdateDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property DeletionProtectionConfiguration|null $deletionProtectionConfiguration
 * @property MediaExtractionConfiguration|null $mediaExtractionConfiguration
 * @property Document|null $connectorParameters
 */
class ManagedKnowledgeBaseConnectorConfiguration extends Shape
{
    /**
     * @param array{
     *     deletionProtectionConfiguration?: DeletionProtectionConfiguration|null,
     *     mediaExtractionConfiguration?: MediaExtractionConfiguration|null,
     *     connectorParameters?: Document|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
