<?php

namespace Sunaoka\Aws\Structures\Ec2\GetFlowLogsIntegrationTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<AthenaIntegration> $AthenaIntegrations
 */
class IntegrateServices extends Shape
{
    /**
     * @param array{AthenaIntegrations?: list<AthenaIntegration>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
