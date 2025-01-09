<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $EncryptionType
 * @property string $KmsMasterKeyArn
 */
class DefaultServerSideEncryption extends Shape
{
    /**
     * @param array{
     *     EncryptionType?: string,
     *     KmsMasterKeyArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
