<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeUser\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $DateImported
 * @property string $SshPublicKeyBody
 * @property string $SshPublicKeyId
 */
class SshPublicKey extends Shape
{
    /**
     * @param array{
     *     DateImported: \Aws\Api\DateTimeResult,
     *     SshPublicKeyBody: string,
     *     SshPublicKeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
