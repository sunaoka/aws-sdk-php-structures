<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeKeyPairs\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KeyPairId
 * @property 'rsa'|'ed25519'|null $KeyType
 * @property list<Tag>|null $Tags
 * @property string|null $PublicKey
 * @property \Aws\Api\DateTimeResult|null $CreateTime
 * @property string|null $KeyName
 * @property string|null $KeyFingerprint
 */
class KeyPairInfo extends Shape
{
    /**
     * @param array{
     *     KeyPairId?: string|null,
     *     KeyType?: 'rsa'|'ed25519'|null,
     *     Tags?: list<Tag>|null,
     *     PublicKey?: string|null,
     *     CreateTime?: \Aws\Api\DateTimeResult|null,
     *     KeyName?: string|null,
     *     KeyFingerprint?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
