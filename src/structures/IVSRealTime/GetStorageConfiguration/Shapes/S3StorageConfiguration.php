<?php

namespace Sunaoka\Aws\Structures\IVSRealTime\GetStorageConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $bucketName
 */
class S3StorageConfiguration extends Shape
{
    /**
     * @param array{bucketName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
