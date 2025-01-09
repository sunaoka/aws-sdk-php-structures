<?php

namespace Sunaoka\Aws\Structures\Synthetics\UpdateCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3EncryptionConfig $S3Encryption
 */
class ArtifactConfigInput extends Shape
{
    /**
     * @param array{S3Encryption?: S3EncryptionConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
