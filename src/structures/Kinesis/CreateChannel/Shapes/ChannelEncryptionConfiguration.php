<?php

namespace Sunaoka\Aws\Structures\Kinesis\CreateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'KMS' $EncryptionType
 * @property string $KeyId
 */
class ChannelEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     EncryptionType: 'KMS',
     *     KeyId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
