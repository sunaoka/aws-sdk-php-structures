<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SSES3Encryption $SSES3
 * @property SSEKMSEncryption $SSEKMS
 */
class GeneratedManifestEncryption extends Shape
{
    /**
     * @param array{
     *     SSES3?: SSES3Encryption,
     *     SSEKMS?: SSEKMSEncryption
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
