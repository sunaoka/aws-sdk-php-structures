<?php

namespace Sunaoka\Aws\Structures\MediaConnect\UpdateFlowEntitlement\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'aes128'|'aes192'|'aes256' $Algorithm
 * @property string $ConstantInitializationVector
 * @property string $DeviceId
 * @property 'speke'|'static-key'|'srt-password' $KeyType
 * @property string $Region
 * @property string $ResourceId
 * @property string $RoleArn
 * @property string $SecretArn
 * @property string $Url
 */
class UpdateEncryption extends Shape
{
    /**
     * @param array{
     *     Algorithm?: 'aes128'|'aes192'|'aes256',
     *     ConstantInitializationVector?: string,
     *     DeviceId?: string,
     *     KeyType?: 'speke'|'static-key'|'srt-password',
     *     Region?: string,
     *     ResourceId?: string,
     *     RoleArn?: string,
     *     SecretArn?: string,
     *     Url?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
