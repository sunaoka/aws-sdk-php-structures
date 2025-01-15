<?php

namespace Sunaoka\Aws\Structures\Synthetics\DescribeCanaries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3EncryptionConfig|null $S3Encryption
 */
class ArtifactConfigOutput extends Shape
{
    /**
     * @param array{S3Encryption?: S3EncryptionConfig|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
