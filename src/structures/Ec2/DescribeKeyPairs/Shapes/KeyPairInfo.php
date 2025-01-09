<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeKeyPairs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $KeyPairId
 * @property 'rsa'|'ed25519' $KeyType
 * @property list<Tag> $Tags
 * @property string $PublicKey
 * @property \Aws\Api\DateTimeResult $CreateTime
 * @property string $KeyName
 * @property string $KeyFingerprint
 */
class KeyPairInfo extends Shape
{
    /**
     * @param array{
     *     KeyPairId?: string,
     *     KeyType?: 'rsa'|'ed25519',
     *     Tags?: list<Tag>,
     *     PublicKey?: string,
     *     CreateTime?: \Aws\Api\DateTimeResult,
     *     KeyName?: string,
     *     KeyFingerprint?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
