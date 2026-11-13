<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationName
 * @property string $StreamName
 * @property TlsEncryption|null $TlsEncryption
 */
class RtmpPushOutputSettings extends Shape
{
    /**
     * @param array{
     *     ApplicationName: string,
     *     StreamName: string,
     *     TlsEncryption?: TlsEncryption|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
