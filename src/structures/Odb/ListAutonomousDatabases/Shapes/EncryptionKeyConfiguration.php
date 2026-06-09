<?php

namespace Sunaoka\Aws\Structures\Odb\ListAutonomousDatabases\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property AwsEncryptionKeyConfiguration|null $awsEncryptionKey
 * @property OciEncryptionKeyConfiguration|null $ociEncryptionKey
 * @property OkvEncryptionKeyConfiguration|null $okvEncryptionKey
 */
class EncryptionKeyConfiguration extends Shape
{
    /**
     * @param array{
     *     awsEncryptionKey?: AwsEncryptionKeyConfiguration|null,
     *     ociEncryptionKey?: OciEncryptionKeyConfiguration|null,
     *     okvEncryptionKey?: OkvEncryptionKeyConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
