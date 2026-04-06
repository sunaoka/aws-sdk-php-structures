<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataIntegrationFlowExecutions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $diagnosticReportsRootS3URI
 */
class DataIntegrationFlowExecutionOutputMetadata extends Shape
{
    /**
     * @param array{diagnosticReportsRootS3URI?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
