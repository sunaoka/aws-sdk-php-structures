<?php

namespace Sunaoka\Aws\Structures\Inspector2\UpdateConnectorScanConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ConnectorContainerImageScanConfiguration|null $containerImageScanning
 */
class ConnectorScanConfiguration extends Shape
{
    /**
     * @param array{containerImageScanning?: ConnectorContainerImageScanConfiguration|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
