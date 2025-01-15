<?php

namespace Sunaoka\Aws\Structures\S3Control\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SSES3Encryption|null $SSES3
 * @property SSEKMSEncryption|null $SSEKMS
 */
class GeneratedManifestEncryption extends Shape
{
    /**
     * @param array{
     *     SSES3?: SSES3Encryption|null,
     *     SSEKMS?: SSEKMSEncryption|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
