<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EncryptionType
 * @property string $KeyId
 */
class AwsKinesisStreamStreamEncryptionDetails extends Shape
{
    /**
     * @param array{
     *     EncryptionType?: string,
     *     KeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
