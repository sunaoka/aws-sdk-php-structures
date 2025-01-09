<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $DataVolumeKMSKeyId
 */
class AwsMskClusterClusterInfoEncryptionInfoEncryptionAtRestDetails extends Shape
{
    /**
     * @param array{DataVolumeKMSKeyId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
