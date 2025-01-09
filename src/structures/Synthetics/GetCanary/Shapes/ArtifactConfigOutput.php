<?php

namespace Sunaoka\Aws\Structures\Synthetics\GetCanary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3EncryptionConfig $S3Encryption
 */
class ArtifactConfigOutput extends Shape
{
    /**
     * @param array{S3Encryption?: S3EncryptionConfig} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
