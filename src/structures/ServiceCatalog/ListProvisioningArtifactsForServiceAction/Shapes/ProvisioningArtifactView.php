<?php

namespace Sunaoka\Aws\Structures\ServiceCatalog\ListProvisioningArtifactsForServiceAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ProductViewSummary $ProductViewSummary
 * @property ProvisioningArtifact $ProvisioningArtifact
 */
class ProvisioningArtifactView extends Shape
{
    /**
     * @param array{
     *     ProductViewSummary?: ProductViewSummary,
     *     ProvisioningArtifact?: ProvisioningArtifact
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
