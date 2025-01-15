<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $EncryptionType
 * @property string|null $KmsMasterKeyArn
 */
class DefaultServerSideEncryption extends Shape
{
    /**
     * @param array{
     *     EncryptionType?: string|null,
     *     KmsMasterKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
