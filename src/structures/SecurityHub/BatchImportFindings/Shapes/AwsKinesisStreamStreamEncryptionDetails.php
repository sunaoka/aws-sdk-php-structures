<?php

namespace Sunaoka\Aws\Structures\SecurityHub\BatchImportFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EncryptionType
 * @property string|null $KeyId
 */
class AwsKinesisStreamStreamEncryptionDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionType?: string|null,
     *     KeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
