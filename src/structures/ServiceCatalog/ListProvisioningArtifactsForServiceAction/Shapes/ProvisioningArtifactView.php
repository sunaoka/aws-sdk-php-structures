<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisioningArtifactsForServiceAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProductViewSummary|null $ProductViewSummary
 * @property ProvisioningArtifact|null $ProvisioningArtifact
 */
class ProvisioningArtifactView extends Shape
{
    /**
     * @param array{
     *     ProductViewSummary?: ProductViewSummary|null,
     *     ProvisioningArtifact?: ProvisioningArtifact|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
