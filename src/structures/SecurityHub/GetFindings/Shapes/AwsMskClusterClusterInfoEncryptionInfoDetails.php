<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsMskClusterClusterInfoEncryptionInfoEncryptionInTransitDetails $EncryptionInTransit
 * @property AwsMskClusterClusterInfoEncryptionInfoEncryptionAtRestDetails $EncryptionAtRest
 */
class AwsMskClusterClusterInfoEncryptionInfoDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionInTransit?: AwsMskClusterClusterInfoEncryptionInfoEncryptionInTransitDetails,
     *     EncryptionAtRest?: AwsMskClusterClusterInfoEncryptionInfoEncryptionAtRestDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
