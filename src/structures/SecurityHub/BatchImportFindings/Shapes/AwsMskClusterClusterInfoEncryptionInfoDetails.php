<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsMskClusterClusterInfoEncryptionInfoEncryptionInTransitDetails|null $EncryptionInTransit
 * @property AwsMskClusterClusterInfoEncryptionInfoEncryptionAtRestDetails|null $EncryptionAtRest
 */
class AwsMskClusterClusterInfoEncryptionInfoDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionInTransit?: AwsMskClusterClusterInfoEncryptionInfoEncryptionInTransitDetails|null,
     *     EncryptionAtRest?: AwsMskClusterClusterInfoEncryptionInfoEncryptionAtRestDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
