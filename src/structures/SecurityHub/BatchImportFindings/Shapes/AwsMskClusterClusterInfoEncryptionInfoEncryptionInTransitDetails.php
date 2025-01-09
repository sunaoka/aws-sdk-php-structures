<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $InCluster
 * @property string $ClientBroker
 */
class AwsMskClusterClusterInfoEncryptionInfoEncryptionInTransitDetails extends Shape
{
    /**
     * @param array{
     *     InCluster?: bool,
     *     ClientBroker?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
