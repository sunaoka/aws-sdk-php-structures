<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $InCluster
 * @property string|null $ClientBroker
 */
class AwsMskClusterClusterInfoEncryptionInfoEncryptionInTransitDetails extends Shape
{
    /**
     * @param array{
     *     InCluster?: bool|null,
     *     ClientBroker?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
